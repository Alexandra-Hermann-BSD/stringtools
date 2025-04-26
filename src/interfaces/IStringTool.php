<?php

    namespace ahbsd\interfaces;

    /**
     * Interface for a string tool.
     *
     * @package ahbsd\interfaces
     * @version 1.0.0
     * @author Alexandra Hermann
     */
    interface IStringTool
    {
        /**
         * Gets the amount of given characters in a string.
         *
         * @param string $char The character(s) to count
         *
         * @return int The amount of given characters in the string
         */
        public function countChars(string $char): int;

        /**
         * Gets the current string.
         *
         * @return string The current string
         */
        public function getString(): string;

        /**
         * Sets the current string.
         *
         * @param string $string The string to set
         */
        public function setString(string $string): void;

    }
