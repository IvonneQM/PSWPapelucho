<?php
/**
 * Created by Computec SOS.
 * User: Yvonne Quinteros, Inger Garrido
 * Date: 30-04-16
 * Time: 11:09 PM
 */

namespace App\Interfaces;


interface SendmailInterface
{
    public function getTo();

    public function getSubject();

    public function getAttachments();

    public function getData();

    public function getTemplate();
}