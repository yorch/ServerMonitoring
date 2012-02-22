<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Server Monitoring
 *
 * Based on the work of Martin Dixon (Tutorial-Resource.com)
 *
 *
 * Copyright (C) 2012 Jorge Barnaby
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom
 * the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Jorge Barnaby <jorge.barnaby at gmail.com>
 * @version    SVN: $Id$
 */

require_once("classes/Server.class.php");
require_once("classes/Service.class.php");

$servers = array();
$i = 0;

// Monitor server
$servers[$i] = new Server("graphium.net");
$servers[$i]->AddService("HTTP", 80);
$servers[$i]->AddService("FTP", 21);
$servers[$i]->AddService("cPanel", 2082);
$servers[$i]->AddService("SMTP", 25);
$i++;

// Monitor server
$servers[$i] = new Server("dechalaca.com");
$servers[$i]->AddService("HTTP", 80);
$i++;

// Monitor server
$servers[$i] = new Server("www1.dechalaca.com");
$servers[$i]->AddService("HTTP", 80);
$i++;

// Monitor server
$servers[$i] = new Server("www2.dechalaca.com");
$servers[$i]->AddService("HTTP", 80);
$i++;
?>