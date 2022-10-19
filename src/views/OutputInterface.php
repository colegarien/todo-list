<?php
namespace Todo\Views;

interface OutputInterface {
    public function print(string $output): void;
}