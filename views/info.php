<div>
    <h1>Pfw</h1>
    <img src="<?=$logo?>" width="128" height="128" alt="<?=$this->text('alt_logo')?>" class="pfw_logo">
    <p>
        Version: <?=$version?>
    </p>
    <p>
        Copyright &copy; 2016-2024 <a href="http://3-magi.net"
        target="_blank">Christoph M. Becker</a><br>
        Copyright &copy; 2025 <a href="https://www.cmsimple-xh.org/?About-CMSimple_XH/The-XH-Team"
        target="_blank">CMSimple_XH developers</a>
    </p>
    <p class="pfw_license">
        Pfw_XH is free software: you can redistribute it and/or modify it under
        the terms of the GNU General Public License as published by the Free
        Software Foundation, either version 3 of the License, or (at your
        option) any later version.
    </p>
    <p class="pfw_license">
        Pfw_XH is distributed in the hope that it will be useful, but
        <em>without any warranty</em>; without even the implied warranty of
        <em>merchantibility</em> or <em>fitness for a particular purpose</em>.
        See the GNU General Public License for more details.
    </p>
    <p class="pfw_license">
        You should have received a copy of the GNU General Public License along
        with Pfw_XH.  If not, see <a href="http://www.gnu.org/licenses/"
        target="_blank">http://www.gnu.org/licenses/</a>.
    </p>
    <div class="pfw_syscheck">
        <h2><?=$this->text('syscheck_title')?></h2>
<?php foreach ($checks as $check):?>
        <p class="xh_<?=$check->getState()?>"><?=$this->text('syscheck_message', $check->getLabel(), $check->getStateLabel())?></p>
<?php endforeach?>
</div>
