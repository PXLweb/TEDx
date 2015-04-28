<?php

/**
 * Description of Mutator
 *
 * @author Daniel Wendler http://blog.flowl.info
 */
class Mutator {

    private $newline = "\r\n";
    private $fluent = true;
    private $ucFirst = true;
    private $scope = "public";
    private $indent = "    ";
    private $regex = '/(?<=\$)[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/';
    private $input;

    public function __construct($input = null) {
        $this->input = $input;
    }

    public function output($input = null) {
        $str = ($this->input === null) ? $input : $this->input;
        $out = '';
        $str = preg_match_all($this->regex, $str, $matches);

        foreach ($matches[0] as $match) {
            if ($this->ucFirst === true) {
                $ucf = ucfirst($match);
            } else {
                $ucf = $match;
            }
            $out .= "{$this->scope} function get{$ucf}() {{$this->newline}{$this->indent}return \$this->{$match};{$this->newline}}{$this->newline}{$this->newline}";
            if ($this->fluent === true) {
                $out .= "{$this->scope} function set{$ucf}(\${$match}) {{$this->newline}{$this->indent}\$this->{$match} = \${$match};{$this->newline}{$this->indent}return \$this;{$this->newline}}{$this->newline}{$this->newline}";
            } else {
                $out .= "{$this->scope} function set{$ucf}(\${$match}) {{$this->newline}{$this->indent}\$this->{$match} = \${$match};{$this->newline}}{$this->newline}{$this->newline}";
            }
        }

        return $out;
    }

    public function getNewline() {
        return $this->newline;
    }

    public function setNewline($newline) {
        $this->newline = $newline;
        return $this;
    }

    public function getFluent() {
        return $this->fluent;
    }

    public function setFluent($fluent) {
        $this->fluent = $fluent;
        return $this;
    }

    public function getUcFirst() {
        return $this->ucFirst;
    }

    public function setUcFirst($ucFirst) {
        $this->ucFirst = $ucFirst;
        return $this;
    }

    public function getScope() {
        return $this->scope;
    }

    public function setScope($scope) {
        $this->scope = $scope;
        return $this;
    }

    public function getIndent() {
        return $this->indent;
    }

    public function setIndent($indent) {
        $this->indent = $indent;
        return $this;
    }

    public function getRegex() {
        return $this->regex;
    }

    public function setRegex($regex) {
        $this->regex = $regex;
        return $this;
    }

    public function getInput() {
        return $this->input;
    }

    public function setInput($input) {
        $this->input = $input;
        return $this;
    }

}
