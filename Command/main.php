<?php
include "ICommand.php";
include "CommandCopy.php";
include "CommandCut.php";
include "CommandPaste.php";
include "TextProcessor.php";

$processor = new TextProcessor(new CommandCopy(), new CommandCut(), new CommandPaste());
$processor->SetBegin(100);
$processor->MoveCursor(30);
$processor->Copy();
$processor->MoveCursor(50);
$processor->Cut();
$processor->MoveCursor(60);
$processor->Paste();
