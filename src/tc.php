<?php
/*
    tc.php 

    Robô de execuÃ§Ã£o do pacote.
*/
namespace test_command;
/*

*/
require(__DIR__ .'/TestCommand.php');
/*
return [
    'requires': [
        './init.php
    ],
    'testNamespace': "tests\\"
]
*/
$configs = array(
    'configs' => require(realpath(__DIR__ . '/../../../../') . '/test_commands.php')
);
TestCommand::exec($configs, $argv[1]);
exit();