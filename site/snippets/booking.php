<?php
/**
 * Datei für die Klasse {@link booking}
 *
 * LICENSE:    default
 *
 * @author     André Lademann <andre.lademann@digitalwert.de>
 * @category   bansin.com
 * @package    Expression package is undefined on line 10, column 18 in Templates/Scripting/EmptyPHP.php.
 * @copyright  Copyright (c) 2005-2013 digitalwert
 * @license    http://www.digitalwert.de/license
 * Dateiname:  booking.php
 * Revision:   $Revision$
 * @version    $Id$
 * @since      2013-01-06 - 11:29:51 PM
 * @modified   $Date$
 */
?>

<form class="form-actions">

<div class="input-append date" id="dateRange" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
  <input class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
</div>


	<div class="control-group">
		<label class="control-label" for="inputEmail">Urlaubzeit</label>
		<div class="controls">
			<input type="date" id="dateStart" placeholder="Start Datum">
		</div>
	</div>


	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input type="text" id="name" placeholder="Ihr Name">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="email" id="email" placeholder="ihr.name@adresse.de">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" id="inputPassword" placeholder="Password">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success span3">Anfragen</button>
		</div>
	</div>
</form>