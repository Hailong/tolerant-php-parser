<?php

namespace PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

class MethodNode extends Node {
    public $children;

    public function __construct() {
        parent::__construct(NodeKind::MethodNode);
    }
}