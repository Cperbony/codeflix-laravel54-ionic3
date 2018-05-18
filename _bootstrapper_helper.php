<?php

namespace Bootstrapper\Facades {

    class Accordion {

        public function __toString() {
            return "";
        }

        /**
         * Name the accordion
         *
         * @param $name The name of the accordion
         * @return $this
         * @static
         */
        public static function named($name)
        {
            return \Bootstrapper\Accordion::named($name);
        }

        /**
         * Add the contents for the accordion. Should be an array of arrays
         * <strong>Expected Keys</strong>:
         * <ul>
         * <li>title</li>
         * <li>contents</li>
         * <li>attributes (optional)</li>
         * </ul>
         *
         * @param array $contents
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Accordion::withContents($contents);
        }

        /**
         * Sets which panel should be opened. Numbering begins from 0.
         *
         * @param $integer int
         * @return $this
         * @static
         */
        public static function open($integer)
        {
            return \Bootstrapper\Accordion::open($integer);
        }

        /**
         * Renders the accordion
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Accordion::render();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Accordion::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Accordion::addClass($classes);
        }

    }

    class Alert {

        public function __toString() {
            return "";
        }

        /**
         * Sets the type of the alert. The alert prefix is not assumed.
         *
         * @param $type string
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\Alert::setType($type);
        }

        /**
         * Renders the alert
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Alert::render();
        }

        /**
         * Creates an info alert box
         *
         * @param string $contents
         * @return $this
         * @static
         */
        public static function info($contents = '')
        {
            return \Bootstrapper\Alert::info($contents);
        }

        /**
         * Creates a success alert box
         *
         * @param string $contents
         * @return $this
         * @static
         */
        public static function success($contents = '')
        {
            return \Bootstrapper\Alert::success($contents);
        }

        /**
         * Creates a warning alert box
         *
         * @param string $contents
         * @return $this
         * @static
         */
        public static function warning($contents = '')
        {
            return \Bootstrapper\Alert::warning($contents);
        }

        /**
         * Creates a danger alert box
         *
         * @param string $contents
         * @return $this
         * @static
         */
        public static function danger($contents = '')
        {
            return \Bootstrapper\Alert::danger($contents);
        }

        /**
         * Sets the contents of the alert box
         *
         * @param $contents
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Alert::withContents($contents);
        }

        /**
         * Adds a close button with the given text
         *
         * @param string $closer
         * @return $this
         * @static
         */
        public static function close($closer = '&times;')
        {
            return \Bootstrapper\Alert::close($closer);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Alert::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Alert::addClass($classes);
        }

    }

    class Badge {

        public function __toString() {
            return "";
        }

        /**
         * Renders the badge
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Badge::render();
        }

        /**
         * Adds contents to the badge
         *
         * @param $contents
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Badge::withContents($contents);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Badge::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Badge::addClass($classes);
        }

    }

    class Breadcrumb {

        public function __toString() {
            return "";
        }

        /**
         * Renders the breadcrumb
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Breadcrumb::render();
        }

        /**
         * Set the links for the breadcrumbs. Expects an array of the following:
         * <ul>
         * <li>An array, with keys <code>link</code> and <code>text</code></li>
         * <li>A string for the active link
         * </ul>
         *
         * @param $links array
         * @return $this
         * @static
         */
        public static function withLinks($links)
        {
            return \Bootstrapper\Breadcrumb::withLinks($links);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Breadcrumb::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Breadcrumb::addClass($classes);
        }

    }

    class Button {

        public function __toString() {
            return "";
        }

        /**
         * Sets the type of the button
         *
         * @param $type string The new type of the button. Assumes that the btn-
         *              prefix is there
         * @return \Bootstrapper\Button
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\Button::setType($type);
        }

        /**
         * Sets the size of the button
         *
         * @param $size string The new size of the button. Assumes that the btn-
         *              prefix is there
         * @return $this
         * @static
         */
        public static function setSize($size)
        {
            return \Bootstrapper\Button::setSize($size);
        }

        /**
         * Renders the button
         *
         * @return string as a string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Button::render();
        }

        /**
         * Creates a button with class .btn-default and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Button
         * @static
         */
        public static function normal($contents = '')
        {
            return \Bootstrapper\Button::normal($contents);
        }

        /**
         * Creates an button with class .btn-primary and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Button
         * @static
         */
        public static function primary($contents = '')
        {
            return \Bootstrapper\Button::primary($contents);
        }

        /**
         * Creates an button with class .btn-success and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Button
         * @static
         */
        public static function success($contents = '')
        {
            return \Bootstrapper\Button::success($contents);
        }

        /**
         * Creates an button with class .btn-info and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Button
         * @static
         */
        public static function info($contents = '')
        {
            return \Bootstrapper\Button::info($contents);
        }

        /**
         * Creates an button with class .btn-warning and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Button
         * @static
         */
        public static function warning($contents = '')
        {
            return \Bootstrapper\Button::warning($contents);
        }

        /**
         * Creates an button with class .btn-danger and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Button
         * @static
         */
        public static function danger($contents = '')
        {
            return \Bootstrapper\Button::danger($contents);
        }

        /**
         * Creates an button with class .btn-link and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Button
         * @static
         */
        public static function link($contents = '')
        {
            return \Bootstrapper\Button::link($contents);
        }

        /**
         * Sets the button to be a block button
         *
         * @return $this
         * @static
         */
        public static function block()
        {
            return \Bootstrapper\Button::block();
        }

        /**
         * Makes the button a submit button
         *
         * @return $this
         * @static
         */
        public static function submit()
        {
            return \Bootstrapper\Button::submit();
        }

        /**
         * Makes the button a reset button
         *
         * @return $this
         * @static
         */
        public static function reset()
        {
            return \Bootstrapper\Button::reset();
        }

        /**
         * Sets the value of the button
         *
         * @param $value string The new value of the button
         * @return $this
         * @static
         */
        public static function withValue($value = '')
        {
            return \Bootstrapper\Button::withValue($value);
        }

        /**
         * Sets the button to be a large button
         *
         * @return $this
         * @static
         */
        public static function large()
        {
            return \Bootstrapper\Button::large();
        }

        /**
         * Sets the button to be a small button
         *
         * @return $this
         * @static
         */
        public static function small()
        {
            return \Bootstrapper\Button::small();
        }

        /**
         * Sets the button to be an extra small button
         *
         * @return $this
         * @static
         */
        public static function extraSmall()
        {
            return \Bootstrapper\Button::extraSmall();
        }

        /**
         * More descriptive version of withAttributes
         *
         * @see withAttributes
         * @param array $attributes The attributes to add
         * @return $this
         * @static
         */
        public static function addAttributes($attributes)
        {
            return \Bootstrapper\Button::addAttributes($attributes);
        }

        /**
         * Disables the button
         *
         * @return $this
         * @static
         */
        public static function disable()
        {
            return \Bootstrapper\Button::disable();
        }

        /**
         * Adds an icon to the button
         *
         * @param $icon string The icon to add
         * @param bool $append Whether the icon should be added after the text or
         *                     before
         * @return $this
         * @static
         */
        public static function withIcon($icon, $append = true)
        {
            return \Bootstrapper\Button::withIcon($icon, $append);
        }

        /**
         * Descriptive version of withIcon(). Adds the icon after the text
         *
         * @see withIcon
         * @param $icon string The icon to add
         * @return $this
         * @static
         */
        public static function appendIcon($icon)
        {
            return \Bootstrapper\Button::appendIcon($icon);
        }

        /**
         * Descriptive version of withIcon(). Adds the icon before the text
         *
         * @param $icon string The icon to add
         * @return $this
         * @static
         */
        public static function prependIcon($icon)
        {
            return \Bootstrapper\Button::prependIcon($icon);
        }

        /**
         * Adds a url to the button, making it a link. This will generate an <a> tag
         *
         * @param $url string The url to link to
         * @return $this
         * @static
         */
        public static function asLinkTo($url)
        {
            return \Bootstrapper\Button::asLinkTo($url);
        }

        /**
         * Get the type of the button
         *
         * @return string
         * @static
         */
        public static function getType()
        {
            return \Bootstrapper\Button::getType();
        }

        /**
         * Get the value of the button. Does not return the value with the icon
         *
         * @return string
         * @static
         */
        public static function getValue()
        {
            return \Bootstrapper\Button::getValue();
        }

        /**
         * Gets the attributes of the button
         *
         * @return array
         * @static
         */
        public static function getAttributes()
        {
            return \Bootstrapper\Button::getAttributes();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Button::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Button::addClass($classes);
        }

    }

    class ButtonGroup {

        public function __toString() {
            return "";
        }

        /**
         * Renders the button group
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\ButtonGroup::render();
        }

        /**
         * Sets the size of the button group
         *
         * @param $size
         * @static
         */
        public static function setSize($size)
        {
            return \Bootstrapper\ButtonGroup::setSize($size);
        }

        /**
         * Sets the button group to be large
         *
         * @return $this
         * @static
         */
        public static function large()
        {
            return \Bootstrapper\ButtonGroup::large();
        }

        /**
         * Sets the button group to be small
         *
         * @return $this
         * @static
         */
        public static function small()
        {
            return \Bootstrapper\ButtonGroup::small();
        }

        /**
         * Sets the button group to be extra small
         *
         * @return $this
         * @static
         */
        public static function extraSmall()
        {
            return \Bootstrapper\ButtonGroup::extraSmall();
        }

        /**
         * Sets the button group to be radio
         *
         * @param array $contents
         * @return $this
         * @static
         */
        public static function radio($contents)
        {
            return \Bootstrapper\ButtonGroup::radio($contents);
        }

        /**
         * Sets the button group to be a checkbox
         *
         * @param array $contents
         * @return $this
         * @static
         */
        public static function checkbox($contents)
        {
            return \Bootstrapper\ButtonGroup::checkbox($contents);
        }

        /**
         * Sets the contents of the button group
         *
         * @param array $contents
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\ButtonGroup::withContents($contents);
        }

        /**
         * Sets the button group to be vertical
         *
         * @return $this
         * @static
         */
        public static function vertical()
        {
            return \Bootstrapper\ButtonGroup::vertical();
        }

        /**
         * Sets the type of the button group
         *
         * @param $type
         * @return $this
         * @static
         */
        public static function asType($type)
        {
            return \Bootstrapper\ButtonGroup::asType($type);
        }

        /**
         * Renders the contents of the button group
         *
         * @return string
         * @throws ButtonGroupException if a string should be activated
         * @static
         */
        public static function renderContents()
        {
            return \Bootstrapper\ButtonGroup::renderContents();
        }

        /**
         *
         *
         * @static
         */
        public static function links($contents = array())
        {
            return \Bootstrapper\ButtonGroup::links($contents);
        }

        /**
         * Sets a link to be activated
         *
         * @param $toActivate
         * @return $this
         * @static
         */
        public static function activate($toActivate)
        {
            return \Bootstrapper\ButtonGroup::activate($toActivate);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\ButtonGroup::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\ButtonGroup::addClass($classes);
        }

    }

    class Carousel {

        public function __toString() {
            return "";
        }

        /**
         * Names the carousel
         *
         * @param string $name The name of the carousel
         * @return $this
         * @static
         */
        public static function named($name)
        {
            return \Bootstrapper\Carousel::named($name);
        }

        /**
         * Set the control icons or text
         *
         * @param string $previousButton Left arrorw, previous text
         * @param string $nextButton right arrow, next string
         * @return \Bootstrapper\this
         * @static
         */
        public static function withControls($previousButton, $nextButton)
        {
            return \Bootstrapper\Carousel::withControls($previousButton, $nextButton);
        }

        /**
         * Sets the contents of the carousel
         *
         * @param array $contents The new contents. Should be an array of arrays,
         *                        with the inner keys being "image", "alt" and
         *                        (optionally) "caption"
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Carousel::withContents($contents);
        }

        /**
         * Renders the carousel
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Carousel::render();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Carousel::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Carousel::addClass($classes);
        }

    }

    class ControlGroup {

        public function __toString() {
            return "";
        }

        /**
         * Renders the control group
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\ControlGroup::render();
        }

        /**
         * Set the attributes of the control group
         *
         * @param array $attributes The attributes array
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            return \Bootstrapper\ControlGroup::withAttributes($attributes);
        }

        /**
         * Adds the contents to the control group
         *
         * @param string $contents The contents of the control group
         * @param null $controlSize |int The size of the form control
         * @return $this
         * @throws ControlGroupException If is $controlSize set and not between 1
         *                            and 12
         * @static
         */
        public static function withContents($contents, $controlSize = null)
        {
            return \Bootstrapper\ControlGroup::withContents($contents, $controlSize);
        }

        /**
         * Sets the label of the control group
         *
         * @param string $label The label
         * @param null $labelSize |int The size of the label
         * @return $this
         * @throws ControlGroupException If is $labelSize set and not between 1
         *                          and 12
         * @static
         */
        public static function withLabel($label, $labelSize = null)
        {
            return \Bootstrapper\ControlGroup::withLabel($label, $labelSize);
        }

        /**
         * Adds a help block
         *
         * @param string $help The help information
         * @return $this
         * @static
         */
        public static function withHelp($help)
        {
            return \Bootstrapper\ControlGroup::withHelp($help);
        }

        /**
         * Adds validation error if occured
         *
         * @param string $name
         * @return $this
         * @static
         */
        public static function withValidation($name)
        {
            return \Bootstrapper\ControlGroup::withValidation($name);
        }

        /**
         * Generates a full control group with a label, control and help block
         *
         * @param string $label The label
         * @param string $control The form control
         * @param string $help The help text
         * @param int $labelSize The size of the label
         * @param int $controlSize The size of the form control
         * @return $this
         * @throws ControlGroupException if the sizes are invalid
         * @static
         */
        public static function generate($label, $control, $help = null, $labelSize = null, $controlSize = null)
        {
            return \Bootstrapper\ControlGroup::generate($label, $control, $help, $labelSize, $controlSize);
        }

        /**
         * Renders the label
         *
         * @return string
         * @static
         */
        public static function renderLabel()
        {
            return \Bootstrapper\ControlGroup::renderLabel();
        }

        /**
         * Creates the div to surround the form control
         *
         * @return string
         * @static
         */
        public static function createControlDiv()
        {
            return \Bootstrapper\ControlGroup::createControlDiv();
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\ControlGroup::addClass($classes);
        }

    }

    class DropdownButton {

        public function __toString() {
            return "";
        }

        /**
         * Set the label of the button
         *
         * @param $label
         * @return $this
         * @static
         */
        public static function labelled($label)
        {
            return \Bootstrapper\DropdownButton::labelled($label);
        }

        /**
         * Set the contents of the button
         *
         * @param array $contents The contents of the dropdown button
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\DropdownButton::withContents($contents);
        }

        /**
         * Sets the type of the button
         *
         * @param string $type The type of the button
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\DropdownButton::setType($type);
        }

        /**
         * Sets the size of the button
         *
         * @param string $size The size of the button
         * @return $this
         * @static
         */
        public static function setSize($size)
        {
            return \Bootstrapper\DropdownButton::setSize($size);
        }

        /**
         * Splits the button
         *
         * @return $this
         * @static
         */
        public static function split()
        {
            return \Bootstrapper\DropdownButton::split();
        }

        /**
         * Sets the button to drop up
         *
         * @return $this
         * @static
         */
        public static function dropup()
        {
            return \Bootstrapper\DropdownButton::dropup();
        }

        /**
         * Creates a normal dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function normal($label = '')
        {
            return \Bootstrapper\DropdownButton::normal($label);
        }

        /**
         * Creates a primary dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function primary($label = '')
        {
            return \Bootstrapper\DropdownButton::primary($label);
        }

        /**
         * Creates a danger dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function danger($label = '')
        {
            return \Bootstrapper\DropdownButton::danger($label);
        }

        /**
         * Creates a warning dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function warning($label = '')
        {
            return \Bootstrapper\DropdownButton::warning($label);
        }

        /**
         * Creates a success dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function success($label = '')
        {
            return \Bootstrapper\DropdownButton::success($label);
        }

        /**
         * Creates a info dropdown button
         *
         * @param string $label The label
         * @return $this
         * @static
         */
        public static function info($label = '')
        {
            return \Bootstrapper\DropdownButton::info($label);
        }

        /**
         * Sets the size to large
         *
         * @return $this
         * @static
         */
        public static function large()
        {
            return \Bootstrapper\DropdownButton::large();
        }

        /**
         * Sets the size to small
         *
         * @return $this
         * @static
         */
        public static function small()
        {
            return \Bootstrapper\DropdownButton::small();
        }

        /**
         * Sets the size to extra small
         *
         * @return $this
         * @static
         */
        public static function extraSmall()
        {
            return \Bootstrapper\DropdownButton::extraSmall();
        }

        /**
         * Renders the dropdown button
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\DropdownButton::render();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\DropdownButton::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\DropdownButton::addClass($classes);
        }

    }

    class Helpers {

        public function __toString() {
            return "";
        }

        /**
         * Slugifies a string
         *
         * @param string $string
         * @return mixed
         * @static
         */
        public static function slug($string)
        {
            return \Bootstrapper\Helpers::slug($string);
        }

        /**
         * Outputs a link to the Bootstrap CDN
         *
         * @param bool $withTheme Gets the bootstrap theme as well
         * @return string
         * @static
         */
        public static function css($withTheme = true)
        {
            return \Bootstrapper\Helpers::css($withTheme);
        }

        /**
         * Outputs a link to the Jquery and Bootstrap CDN
         *
         * @return string
         * @static
         */
        public static function js()
        {
            return \Bootstrapper\Helpers::js();
        }

        /**
         * Generate an id of the form "x-class-name-x". These should always be
         * unique.
         *
         * @param \Bootstrapper\RenderedObject $caller The object that called this
         * @return string A unique id
         * @static
         */
        public static function generateId($caller)
        {
            return \Bootstrapper\Helpers::generateId($caller);
        }

    }

    class Icon {

        public function __toString() {
            return "";
        }

        /**
         * Renders the object
         *
         * @return string
         * @throws IconException
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Icon::render();
        }

        /**
         * Creates a span link with the correct icon link
         *
         * @param string $icon The icon name
         * @return string
         * @static
         */
        public static function create($icon)
        {
            return \Bootstrapper\Icon::create($icon);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Icon::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Icon::addClass($classes);
        }

    }

    class InputGroup {

        public function __toString() {
            return "";
        }

        /**
         * Renders the input group
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\InputGroup::render();
        }

        /**
         * Sets the contents of the input group
         *
         * @param string $contents The new contents
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\InputGroup::withContents($contents);
        }

        /**
         * Sets the size of the input group
         *
         * @param string $size The new size
         * @return $this
         * @static
         */
        public static function setSize($size)
        {
            return \Bootstrapper\InputGroup::setSize($size);
        }

        /**
         * Prepends something to the input
         *
         * @param string $prepend The value to prepend
         * @param bool $isButton Whether the value is a button
         * @return $this
         * @static
         */
        public static function prepend($prepend, $isButton = false)
        {
            return \Bootstrapper\InputGroup::prepend($prepend, $isButton);
        }

        /**
         * Prepend a button
         *
         * @param string $button The button to prepend
         * @return $this
         * @static
         */
        public static function prependButton($button)
        {
            return \Bootstrapper\InputGroup::prependButton($button);
        }

        /**
         * Appends something to the input
         *
         * @param string $append The value to append
         * @param bool $isButton Whether the value is a button
         * @return $this
         * @static
         */
        public static function append($append, $isButton = false)
        {
            return \Bootstrapper\InputGroup::append($append, $isButton);
        }

        /**
         * Append a button
         *
         * @param string $button The button to append
         * @return $this
         * @static
         */
        public static function appendButton($button)
        {
            return \Bootstrapper\InputGroup::appendButton($button);
        }

        /**
         * Makes the input group large
         *
         * @return $this
         * @static
         */
        public static function large()
        {
            return \Bootstrapper\InputGroup::large();
        }

        /**
         * Makes the input group small
         *
         * @return $this
         * @static
         */
        public static function small()
        {
            return \Bootstrapper\InputGroup::small();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\InputGroup::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\InputGroup::addClass($classes);
        }

    }

    class Image {

        public function __toString() {
            return "";
        }

        /**
         * Renders the image
         *
         * @return string
         * @throws ImageException If the image source is not set
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Image::render();
        }

        /**
         * Sets the source of the image
         *
         * @param string $source The source of the image
         * @return $this
         * @static
         */
        public static function withSource($source)
        {
            return \Bootstrapper\Image::withSource($source);
        }

        /**
         * Sets the alt text of the image
         *
         * @param string $alt The alt text of the image
         * @return $this
         * @static
         */
        public static function withAlt($alt)
        {
            return \Bootstrapper\Image::withAlt($alt);
        }

        /**
         * Sets the image to be responsive
         *
         * @return $this
         * @static
         */
        public static function responsive()
        {
            return \Bootstrapper\Image::responsive();
        }

        /**
         * Creates a rounded image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this
         * @static
         */
        public static function rounded($src = null, $alt = null)
        {
            return \Bootstrapper\Image::rounded($src, $alt);
        }

        /**
         * Creates a circle image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this
         * @static
         */
        public static function circle($src = null, $alt = null)
        {
            return \Bootstrapper\Image::circle($src, $alt);
        }

        /**
         * Creates a thumbnail image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this
         * @static
         */
        public static function thumbnail($src = null, $alt = null)
        {
            return \Bootstrapper\Image::thumbnail($src, $alt);
        }

        /**
         * BC version of Image::addClass()
         *
         * @param string|array $class
         * @return $this
         * @static
         */
        public static function addClass($class)
        {
            return \Bootstrapper\Image::addClass($class);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Image::withAttributes($attributes);
        }

    }

    class Label {

        public function __toString() {
            return "";
        }



        /**
         * Renders the label
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Label::render();
        }

        /**
         * Sets the contents of the label
         *
         * @param string $contents The new contents of the label
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Label::withContents($contents);
        }

        /**
         * Sets the type of the label. Assumes that the label- prefix is already set
         *
         * @param string $type The new type
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\Label::setType($type);
        }

        /**
         * Creates a primary label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function primary($contents = '')
        {
            return \Bootstrapper\Label::primary($contents);
        }

        /**
         * Creates a success label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function success($contents = '')
        {
            return \Bootstrapper\Label::success($contents);
        }

        /**
         * Creates an info label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function info($contents = '')
        {
            return \Bootstrapper\Label::info($contents);
        }

        /**
         * Creates a warning label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function warning($contents = '')
        {
            return \Bootstrapper\Label::warning($contents);
        }

        /**
         * Creates a danger label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function danger($contents = '')
        {
            return \Bootstrapper\Label::danger($contents);
        }

        /**
         * Creates a label
         *
         * @param string $contents The contents of the label
         * @param string $type The type to use
         * @return $this
         * @static
         */
        public static function create($contents, $type = 'label-default')
        {
            return \Bootstrapper\Label::create($contents, $type);
        }

        /**
         * Creates a normal label
         *
         * @param string $contents The contents of the label
         * @return $this
         * @static
         */
        public static function normal($contents = '')
        {
            return \Bootstrapper\Label::normal($contents);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Label::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Label::addClass($classes);
        }

    }

    class MediaObject {

        public function __toString() {
            return "";
        }

        /**
         * Renders the media object
         *
         * @return string
         * @throws MediaObjectException if there is no contents
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\MediaObject::render();
        }

        /**
         * Sets the contents of the media object
         *
         * @param array $contents The contents of the media object
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\MediaObject::withContents($contents);
        }

        /**
         * Force the media object to become a list
         *
         * @return $this
         * @static
         */
        public static function asList()
        {
            return \Bootstrapper\MediaObject::asList();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\MediaObject::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\MediaObject::addClass($classes);
        }

    }

    class Modal {

        public function __toString() {
            return "";
        }

        /**
         * Renders the modal
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Modal::render();
        }

        /**
         * Sets the title of the modal
         *
         * @param string $title
         * @return $this
         * @static
         */
        public static function withTitle($title)
        {
            return \Bootstrapper\Modal::withTitle($title);
        }

        /**
         * Sets the body of the modal
         *
         * @param string $body The new body of the modal
         * @return $this
         * @static
         */
        public static function withBody($body)
        {
            return \Bootstrapper\Modal::withBody($body);
        }

        /**
         * Set the footer of the modal
         *
         * @param string $footer The footer
         * @return $this
         * @static
         */
        public static function withFooter($footer)
        {
            return \Bootstrapper\Modal::withFooter($footer);
        }

        /**
         * Sets the name of the modal
         *
         * @param string $name The name of the modal
         * @return $this
         * @static
         */
        public static function named($name)
        {
            return \Bootstrapper\Modal::named($name);
        }

        /**
         * Sets the button
         *
         * @param \Button $button The button to open the modal with
         * @return $this
         * @static
         */
        public static function withButton($button = null)
        {
            return \Bootstrapper\Modal::withButton($button);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Modal::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Modal::addClass($classes);
        }

    }

    class Navbar {

        public function __toString() {
            return "";
        }

        /**
         * Renders the navbar
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Navbar::render();
        }

        /**
         * Sets the brand of the navbar
         *
         * @param string $brand The brand
         * @param null|string $link The link. If not set we default to linking to
         *                           '/' using the UrlGenerator
         * @return $this
         * @static
         */
        public static function withBrand($brand, $link = null)
        {
            return \Bootstrapper\Navbar::withBrand($brand, $link);
        }

        /**
         * Sets the brand of the navbar
         *
         * @param string $image The brand image
         * @param null|string $link The link. If not set we default to linking to
         *                             '/' using the UrlGenerator
         * @param string $altText The alt text for the image
         * @return $this
         * @static
         */
        public static function withBrandImage($image, $link = null, $altText = '')
        {
            return \Bootstrapper\Navbar::withBrandImage($image, $link, $altText);
        }

        /**
         * Adds some content to the navbar
         *
         * @param mixed $content Anything that can become a string! If you pass in a
         *                       Bootstrapper\Navigation object we'll make sure
         *                       it's a navbar on render.
         * @return $this
         * @static
         */
        public static function withContent($content)
        {
            return \Bootstrapper\Navbar::withContent($content);
        }

        /**
         * Sets the navbar to be inverse
         *
         * @param string $position
         * @param array $attributes
         * @return $this
         * @static
         */
        public static function inverse($position = null, $attributes = array())
        {
            return \Bootstrapper\Navbar::inverse($position, $attributes);
        }

        /**
         * Sets the position to top
         *
         * @return $this
         * @static
         */
        public static function staticTop()
        {
            return \Bootstrapper\Navbar::staticTop();
        }

        /**
         * Sets the type of the navbar
         *
         * @param string $type The type of the navbar. Assumes that the navbar-
         *                     prefix is there
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\Navbar::setType($type);
        }

        /**
         * Sets the position of the navbar
         *
         * @param string $position The position of the navbar. Assumes that the
         *                         navbar- prefix is there
         * @return $this
         * @static
         */
        public static function setPosition($position)
        {
            return \Bootstrapper\Navbar::setPosition($position);
        }

        /**
         * Sets the position of the navbar to the top
         *
         * @return $this
         * @static
         */
        public static function top()
        {
            return \Bootstrapper\Navbar::top();
        }

        /**
         * Sets the position of the navbar to the bottom
         *
         * @return $this
         * @static
         */
        public static function bottom()
        {
            return \Bootstrapper\Navbar::bottom();
        }

        /**
         * Creates a navbar with a position and attributes
         *
         * @param string $position The position of the navbar
         * @param array $attributes The attributes of the navbar
         * @return $this
         * @static
         */
        public static function create($position, $attributes = array())
        {
            return \Bootstrapper\Navbar::create($position, $attributes);
        }

        /**
         * Sets the navbar to be fluid
         *
         * @return $this
         * @static
         */
        public static function fluid()
        {
            return \Bootstrapper\Navbar::fluid();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Navbar::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Navbar::addClass($classes);
        }

    }

    class Navigation {

        public function __toString() {
            return "";
        }

        /**
         * Renders the navigation object
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Navigation::render();
        }

        /**
         * Creates a pills navigation block
         *
         * @param array $links The links
         * @param array $attributes The attributes. Does not overwrite the
         *                          previous values if not set
         * @see Bootstrapper\Navigatation::$links
         * @return $this
         * @static
         */
        public static function pills($links = array(), $attributes = null)
        {
            return \Bootstrapper\Navigation::pills($links, $attributes);
        }

        /**
         * Sets the links of the navigation object
         *
         * @param array $links The links
         * @return $this
         * @see Bootstrapper\Navigation::$links
         * @static
         */
        public static function links($links)
        {
            return \Bootstrapper\Navigation::links($links);
        }

        /**
         * Creates a navigation tab object.
         *
         * @param array $links The links to be passed in
         * @param array $attributes The attributes of the navigation object. Will
         *                          overwrite unless not set.
         * @return $this
         * @static
         */
        public static function tabs($links = array(), $attributes = null)
        {
            return \Bootstrapper\Navigation::tabs($links, $attributes);
        }

        /**
         * Sets the autorouting. Pass false to turn it off, true to turn it on
         *
         * @param bool $autoroute Whether the autorouting should be on
         * @return $this
         * @static
         */
        public static function autoroute($autoroute)
        {
            return \Bootstrapper\Navigation::autoroute($autoroute);
        }

        /**
         * Turns the navigation object into one for navbars
         *
         * @return $this
         * @static
         */
        public static function navbar()
        {
            return \Bootstrapper\Navigation::navbar();
        }

        /**
         * Makes the navigation links justified
         *
         * @return $this
         * @static
         */
        public static function justified()
        {
            return \Bootstrapper\Navigation::justified();
        }

        /**
         * Makes the navigation stacked
         *
         * @return $this
         * @static
         */
        public static function stacked()
        {
            return \Bootstrapper\Navigation::stacked();
        }

        /**
         * Makes the navigation links float right
         *
         * @return $this
         * @static
         */
        public static function right()
        {
            return \Bootstrapper\Navigation::right();
        }

        /**
         * Makes the navigation links float left
         *
         * @return $this
         * @static
         */
        public static function left()
        {
            return \Bootstrapper\Navigation::left();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Navigation::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Navigation::addClass($classes);
        }

    }

    class Panel {

        public function __toString() {
            return "";
        }

        /**
         * Renders the panel
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Panel::render();
        }

        /**
         * Creates a primary panel
         *
         * @return $this
         * @static
         */
        public static function primary()
        {
            return \Bootstrapper\Panel::primary();
        }

        /**
         * Creates a success panel
         *
         * @return $this
         * @static
         */
        public static function success()
        {
            return \Bootstrapper\Panel::success();
        }

        /**
         * Creates an info panel
         *
         * @return $this
         * @static
         */
        public static function info()
        {
            return \Bootstrapper\Panel::info();
        }

        /**
         * Creates an warning panel
         *
         * @return $this
         * @static
         */
        public static function warning()
        {
            return \Bootstrapper\Panel::warning();
        }

        /**
         * Creates an danger panel
         *
         * @return $this
         * @static
         */
        public static function danger()
        {
            return \Bootstrapper\Panel::danger();
        }

        /**
         * Sets the type of the panel
         *
         * @param string $type The new type. Assume the panel- prefix
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\Panel::setType($type);
        }

        /**
         * Sets the header of the panel
         *
         * @param string $header The header
         * @return $this
         * @static
         */
        public static function withHeader($header)
        {
            return \Bootstrapper\Panel::withHeader($header);
        }

        /**
         * Sets the body of the panel
         *
         * @param string $body The body
         * @return $this
         * @static
         */
        public static function withBody($body)
        {
            return \Bootstrapper\Panel::withBody($body);
        }

        /**
         * Sets the table of the panel
         *
         * @param string|\Table $table The table
         * @return $this
         * @static
         */
        public static function withTable($table)
        {
            return \Bootstrapper\Panel::withTable($table);
        }

        /**
         * Sets the footer
         *
         * @param string $footer The new footer
         * @return $this
         * @static
         */
        public static function withFooter($footer)
        {
            return \Bootstrapper\Panel::withFooter($footer);
        }

        /**
         * Creates a normal panel
         *
         * @return $this
         * @static
         */
        public static function normal()
        {
            return \Bootstrapper\Panel::normal();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Panel::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Panel::addClass($classes);
        }

    }

    class ProgressBar {

        public function __toString() {
            return "";
        }

        /**
         * Renders the progress bar
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\ProgressBar::render();
        }

        /**
         * Sets the type of the progress bar
         *
         * @param string $type The type
         * @return $this
         * @static
         */
        public static function setType($type)
        {
            return \Bootstrapper\ProgressBar::setType($type);
        }

        /**
         * Sets the value of the progress bar
         *
         * @param int $value The value of the progress bar The value of the
         *                   progress bar
         * @return $this
         * @static
         */
        public static function value($value)
        {
            return \Bootstrapper\ProgressBar::value($value);
        }

        /**
         * Whether the amount should be visible
         *
         * @param string $string The string to show to the user. We internally
         *                       will use sprintf to show this, so you must
         *                       include a %s somewhere so we can add this in
         * @return $this
         * @static
         */
        public static function visible($string = '%s%%')
        {
            return \Bootstrapper\ProgressBar::visible($string);
        }

        /**
         * Creates a success progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this
         * @static
         */
        public static function success($value = 0)
        {
            return \Bootstrapper\ProgressBar::success($value);
        }

        /**
         * Creates an info progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this
         * @static
         */
        public static function info($value = 0)
        {
            return \Bootstrapper\ProgressBar::info($value);
        }

        /**
         * Creates a warning progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this
         * @static
         */
        public static function warning($value = 0)
        {
            return \Bootstrapper\ProgressBar::warning($value);
        }

        /**
         * Creates a danger progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this
         * @static
         */
        public static function danger($value = 0)
        {
            return \Bootstrapper\ProgressBar::danger($value);
        }

        /**
         * Creates a normal progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this
         * @static
         */
        public static function normal($value = 0)
        {
            return \Bootstrapper\ProgressBar::normal($value);
        }

        /**
         * Sets the progress bar to be striped
         *
         * @return $this
         * @static
         */
        public static function striped()
        {
            return \Bootstrapper\ProgressBar::striped();
        }

        /**
         * Sets the progress bar to be animated
         *
         * @return $this
         * @static
         */
        public static function animated()
        {
            return \Bootstrapper\ProgressBar::animated();
        }

        /**
         * Stacks several progress bars together
         *
         * @param array $items The progress bars. Should be an array of arrays,
         *                     which are a list of methods and parameters.
         * @return string
         * @static
         */
        public static function stack($items)
        {
            return \Bootstrapper\ProgressBar::stack($items);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\ProgressBar::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\ProgressBar::addClass($classes);
        }

    }

    class Tabbable {

        public function __toString() {
            return "";
        }


        /**
         * Renders the tabbable object
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Tabbable::render();
        }

        /**
         * Creates content with a tabbed navigation
         *
         * @param array $contents The content
         * @return $this
         * @see Bootstrapper\Navigation::$contents
         * @static
         */
        public static function tabs($contents = array())
        {
            return \Bootstrapper\Tabbable::tabs($contents);
        }

        /**
         * Creates content with a pill navigation
         *
         * @param array $contents
         * @return $this
         * @see Bootstrapper\Navigation::$contents
         * @static
         */
        public static function pills($contents = array())
        {
            return \Bootstrapper\Tabbable::pills($contents);
        }

        /**
         * Sets the contents
         *
         * @param array $contents An array of arrays
         * @return $this
         * @see Bootstrapper\Navigation::$contents
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Tabbable::withContents($contents);
        }

        /**
         * Sets which tab should be active
         *
         * @param int $active
         * @return $this
         * @static
         */
        public static function active($active)
        {
            return \Bootstrapper\Tabbable::active($active);
        }

        /**
         * Sets the tabbable objects to fade in
         *
         * @return $this
         * @static
         */
        public static function fade()
        {
            return \Bootstrapper\Tabbable::fade();
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Tabbable::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Tabbable::addClass($classes);
        }

    }

    class Table {

        public function __toString() {
            return "";
        }


        /**
         * Renders the table
         *
         * @return string
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Table::render();
        }

        /**
         * Sets the table to be striped
         *
         * @return $this
         * @static
         */
        public static function striped()
        {
            return \Bootstrapper\Table::striped();
        }

        /**
         * Sets the table to be bordered
         *
         * @return $this
         * @static
         */
        public static function bordered()
        {
            return \Bootstrapper\Table::bordered();
        }

        /**
         * Sets the table to have an active hover state
         *
         * @return $this
         * @static
         */
        public static function hover()
        {
            return \Bootstrapper\Table::hover();
        }

        /**
         * Sets the table to be condensed
         *
         * @return $this
         * @static
         */
        public static function condensed()
        {
            return \Bootstrapper\Table::condensed();
        }

        /**
         * Sets the contents of the table
         *
         * @param array|\Bootstrapper\Traversable $contents The contents of the table. We expect
         *                                    either an array of arrays or an
         *                                    array of eloquent models
         * @return $this
         * @static
         */
        public static function withContents($contents)
        {
            return \Bootstrapper\Table::withContents($contents);
        }

        /**
         * Creates a list of columns to ignore
         *
         * @param array $ignores The ignored columns
         * @return $this
         * @static
         */
        public static function ignore($ignores)
        {
            return \Bootstrapper\Table::ignore($ignores);
        }

        /**
         * Adds a callback
         *
         * @param string $index The column name for the callback
         * @param callable $function The callback function,
         *                           which should be of the form
         *                           function($column, $row).
         * @return $this
         * @static
         */
        public static function callback($index, $function)
        {
            return \Bootstrapper\Table::callback($index, $function);
        }

        /**
         * Sets which columns we can return
         *
         * @param array $only
         * @return $this
         * @static
         */
        public static function only($only)
        {
            return \Bootstrapper\Table::only($only);
        }

        /**
         * Sets content to be rendered in to the table footer
         *
         * @param string $footer
         * @return $this
         * @static
         */
        public static function withFooter($footer)
        {
            return \Bootstrapper\Table::withFooter($footer);
        }

        /**
         * Uses given class(es) on body TDs.
         *
         * @param mixed $classes The class(es) to apply.
         * @return $this
         * @static
         */
        public static function withBodyCellClass($classes)
        {
            return \Bootstrapper\Table::withBodyCellClass($classes);
        }

        /**
         *
         *
         * @static
         */
        public static function withClassOnCellsInColumn($columns, $classes)
        {
            return \Bootstrapper\Table::withClassOnCellsInColumn($columns, $classes);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Table::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Table::addClass($classes);
        }

    }

    class Thumbnail {

        public function __toString() {
            return "";
        }

        /**
         * Renders the thumbnail
         *
         * @return string
         * @throws ThumbnailException if the image is not specified
         * @static
         */
        public static function render()
        {
            return \Bootstrapper\Thumbnail::render();
        }

        /**
         * Sets the image for the thumbnail
         *
         * @param string $image The image source
         * @param array $attributes The attributes
         * @return $this
         * @static
         */
        public static function image($image, $attributes = array())
        {
            return \Bootstrapper\Thumbnail::image($image, $attributes);
        }

        /**
         * Sets the caption for the thumbnail
         *
         * @param string $caption The new caption
         * @return $this
         * @static
         */
        public static function caption($caption)
        {
            return \Bootstrapper\Thumbnail::caption($caption);
        }

        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this
         * @static
         */
        public static function withAttributes($attributes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Thumbnail::withAttributes($attributes);
        }

        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this
         * @static
         */
        public static function addClass($classes)
        {
            //Method inherited from \Bootstrapper\RenderedObject
            return \Bootstrapper\Thumbnail::addClass($classes);
        }

    }

}