<?php

class RWD_Enigma_GutenbergHelpers {

    static private function parse_padding($padding) {
        // Use explode to split the string
        $parts = explode('|', $padding);
        // Get the last part
        return end($parts);
    }

    static public function get_padding_classes($attributes, $defaultClass = '') {

        $style = $attributes['style'] ?? [];

        if (!isset($style['spacing']) || !$style['spacing']) {
            return $defaultClass;
        }

        if (!isset($style['spacing']['padding']) || !$style['spacing']['padding']) {
            return $defaultClass;
        }

        $padding_top = isset($style['spacing']['padding']['top']) ? $style['spacing']['padding']['top'] : 0;
        $padding_bottom = isset($style['spacing']['padding']['bottom']) ? $style['spacing']['padding']['bottom'] : 0;

        $padding_bottom_class = '';
        $padding_top_class = '';

        if ($padding_top === '0' || $padding_top === 0) {
            $padding_top_class = 'pt-none';
        }else{
            $padding_top_class = 'pt-' . self::parse_padding($padding_top);
        }

        if ($padding_bottom === '0' || $padding_bottom === 0) {
            $padding_bottom_class = 'pb-none';
        }else{
            $padding_bottom_class = 'pb-' . self::parse_padding($padding_bottom);
        }

        return $padding_top_class . ' ' . $padding_bottom_class;
        
    }

    static public function get_text_color_class($attributes, $defaultColor = '') {
        $textColor = $attributes['textColor'] ?? $defaultColor;
        $textColorClass = !empty($textColor) ? 'has-' . sanitize_title($textColor) . '-color' : '';

        return $textColorClass;
    }

    static public function get_background_color_class($attributes, $defaultColor = '') {

        $bgColor = $attributes['backgroundColor'] ?? $defaultColor;
        $bgColorClass = !empty($bgColor) ? 'has-' . sanitize_title($bgColor) . '-background-color' : '';

        return $bgColorClass;
    }

    static public function get_color_classes($attributes, $defaultColor = '') {

        $bgColor = $attributes['backgroundColor'] ?? $defaultColor;
        $textColor = $attributes['textColor'] ?? $defaultColor;

        $bgColorClass = self::get_background_color_class($attributes, $defaultColor);
        $textColorClass = self::get_text_color_class($attributes, $defaultColor);

        return $bgColorClass . ' ' . $textColorClass;

    }
}

