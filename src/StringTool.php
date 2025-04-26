<?php

    namespace ahbsd;

    use ahbsd\interfaces\IStringTool;

    /**
     * Class StringTool.
     * Implements the IStringTool interface.
     *
     * @package ahbsd
     * @version 1.0.0
     * @author Alexandra Hermann
     */
    class StringTool implements IStringTool
    {
        /**
         * @var string The current string
         */
        private string $currentString;

        /**
         * StringTool constructor.
         *
         * @param string $string [optional] The string to set
         */
        public function __construct (string $string = "")
        {
            $this->currentString = $string;
        }

        /**
         * @inheritDoc
         */
        public function countChars ( string $char ) : int
        {
            $count = 0;
            $stringLength = strlen($this->currentString);
            $charLength = strlen($char);

            for ($i = 0; $i < $stringLength; $i++)
            {
                if (substr($this->currentString, $i, $charLength) === $char)
                {
                    $count++;
                }
            }

            return $count;
        }

        /**
         * @inheritDoc
         */
        public function getString () : string
        {
            return $this->currentString;
        }

        /**
         * @inheritDoc
         */
        public function setString ( string $string ) : void
        {
            $this->currentString = $string;
        }

    }
