<?php

namespace App\Components;

use Html;
use Illuminate\Support\HtmlString;

/**
 * Class Buttons
 * Helper to work with buttons in lists or wherever
 * This buttons based on the tag `a`
 *
 * @package App\Helpers
 */
class Buttons
{

    /**
     * Check if button could be shown
     *
     * @var bool
     */
    private $couldBeShown;

    /**
     * Url
     *
     * @var string
     */
    private $url;

    /**
     * Default classes on all buttons
     *
     * @var array
     */
    private $defaultClasses = ['btn', 'btn-flat'];

    /**
     * Buttons constructor.
     *
     * @param string $routeName
     * @param null $routeParametersOrId
     * @param bool $couldBeShown
     */
    public function __construct(string $routeName, $routeParametersOrId = null, bool $couldBeShown = true)
    {
        // Parse route parameters
        $routeParameters = [];
        if (is_integer($routeParametersOrId)) {
            $routeParameters = ['id' => $routeParametersOrId];
        } elseif (is_array($routeParametersOrId)) {
            $routeParameters = $routeParametersOrId;
        }
        // Generate URL
        $this->url = route($routeName, $routeParameters);
        $this->couldBeShown = $couldBeShown;
    }

    /**
     * @param string $text
     * @param string $routeName
     * @param null $routeParametersOrId
     * @param bool|null $couldBeShown
     * @param null $class
     * @return HtmlString|string
     */
    static function custom(string $text, string $routeName, $routeParametersOrId = null, bool $couldBeShown = true, $class = null)
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            $text,
            $class ?? 'btn-default'
        );
    }

    /**
     * Create button html
     *
     * @param string $content
     * @param null $class
     * @param array $attributes
     * @return HtmlString|string
     */
    public function make(string $content, $class = null, array $attributes = [])
    {
        if ($this->couldBeShown === false) {
            return '';
        }
        // Merge classes
        $class = is_array($class) ? $class : [(string)$class];
        // Make button
        return Html::link(
            $this->url,
            $content,
            ['class' => array_merge($this->defaultClasses, $class)] + $attributes,
            null,
            false
        );
    }

    /**
     * View button preset
     *
     * @param string $routeName
     * @param null $routeParametersOrId
     * @param bool $couldBeShown
     * @return HtmlString
     */
    static function view(string $routeName, $routeParametersOrId = null, bool $couldBeShown = null)
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            Html::tag('i', '', ['class' => ['fa', 'fa-eye']]),
            'btn-default'
        );
    }

    /**
     * @param string $routeName
     * @param $routeParametersOrId
     * @param bool|null $couldBeShown
     * @param string|null $class
     * @param array $attributes
     * @return HtmlString|string
     */
    static function edit(string $routeName, $routeParametersOrId = null, bool $couldBeShown = null, ?string $class = null, array $attributes = [])
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            Html::tag('i', '', ['class' => ['fa', 'fa-pencil']]),
            $class ?? 'btn-primary',
            $attributes
        );
    }

    /**
     * @param string $routeName
     * @param $routeParametersOrId
     * @param string|null $class
     * @param bool|null $couldBeShown
     * @return HtmlString|string
     */
    static function delete(string $routeName, $routeParametersOrId = null, bool $couldBeShown = null, ?string $class = null)
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            Html::tag('i', '', ['class' => ['fa', 'fa-trash']]),
                $class ?? 'btn-danger'
        );
    }

    /**
     * @param string $routeName
     * @param $routeParametersOrId
     * @param string|null $class
     * @param bool|null $couldBeShown
     * @return HtmlString|string
     */
    static function restore(string $routeName, $routeParametersOrId = null, bool $couldBeShown = null, ?string $class = null)
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            Html::tag('i', '', ['class' => ['fa', 'fa-hand-peace-o']]),
            [$class ?? 'btn-success'],
            [
                'data-toggle' => 'confirmation',
                'data-message' => trans('admin.messages.restore'),
            ]
        );
    }

    /**
     * @param string $routeName
     * @param $routeParametersOrId
     * @param bool|null $couldBeShown
     * @param string|null $class
     * @param array $attributes
     * @return HtmlString|string
     */
    static function update(string $routeName, $routeParametersOrId = null, bool $couldBeShown = null, ?string $class = null, array $attributes = [])
    {
        // Button exemplar
        $button = new Buttons($routeName, $routeParametersOrId, $couldBeShown);
        // Make button html
        return $button->make(
            Html::tag('i', '', ['class' => ['fa', 'fa-refresh']]),
            $class ?? 'btn-primary',
            $attributes
        );
    }

    /**
     * Set new default classes to current element
     *
     * @param  $classes
     * @return $this
     */
    public function setDefaultClasses($classes): Buttons
    {
        $this->defaultClasses = is_array($classes) ? $classes : [(string)$classes];

        return $this;
    }

}
