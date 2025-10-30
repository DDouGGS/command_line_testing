<?php
/*
    tc.php 

    Robô de execução do pacote.
*/
namespace test_command;
/*

*/
require(__DIR__ .'/TestCommand.php');
/*
{
    'require': {
        './init.php
    };
}
*/
$configs = array(
    'baseFolder' => realpath(__DIR__ . '/../../../../'),
    'testFolder' => realpath(__DIR__ . '/../../../../') . '/tests/',
    'configs' => require(realpath(__DIR__ . '/../../../../') . '/test_commands.json')
);
$test = $argv[1];
TestCommand::exec($configs, $test);
exit();