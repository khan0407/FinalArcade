<?php
$chattheme_cfg = new stdClass();
$chattheme_cfg->avatar = true;
$chattheme_cfg->align  = true;
$chattheme_cfg->event_message = <<<TEMPLATE
<div class="chat-event">
<span class="time">___time___</span>
<a target='_blank' href="___senderprofile___">___sender___</a>
<span class="event">___event___</span>
</div>
TEMPLATE;
$chattheme_cfg->user_message_left = <<<TEMPLATE
<<<<<<< HEAD
<table class='chat-message'___tablealign___><tr>
<td class="picture" valign="middle" width="32px">
___avatar___
</td>
<td class="text">
    <table cellspacing="0" cellpadding="0" border="0" ___mymessageclass___>
    <tbody>
        <tr><td class="topleft"></td><td class="top"></td><td class="topright"></td></tr>
        <tr>
            <td class="left"></td>
            <td class="conmts">
            ___message___
            </td>
            <td class="right"></td>
        </tr>
        <tr>
            <td class="bottomleft"></td>
            <td class="bottom"></td>
            <td class="bottomright"></td>
        </tr>
    </tbody>
    </table>
</td>
<tr>
<td colspan="2"___align___>
    <span class="time">___time___</span>
    <span class="user">___sender___</span>
</td>
</tr>
TEMPLATE;
$chattheme_cfg->user_message_right = <<<TEMPLATE
<table class='chat-message'___tablealign___><tr>
<td class="text">
    <table cellspacing="0" cellpadding="0" border="0" ___mymessageclass___>
    <tbody>
        <tr><td class="topleft"></td><td class="top"></td><td class="topright"></td></tr>
        <tr>
            <td class="left"></td>
            <td class="conmts">
            ___message___
            </td>
            <td class="right"></td>
        </tr>
        <tr>
            <td class="bottomleft"></td>
            <td class="bottom"></td>
            <td class="bottomright"></td>
        </tr>
    </tbody>
    </table>
</td>
<td class="picture" valign="middle" width="32px">
___avatar___
</td>
<tr>
<td colspan="2" ___tablealign___>
    <span class="time">___time___</span>
    <span class="user">___sender___</span>
</td>
</tr>
=======
<div class='chat-message ___mymessageclass___'>
    <div class="left">
        <span class="picture">___avatar___</span>
        <span class="text triangle-border left">___message___</span>
    </div>
    <div class="chat-message-meta left">
        <span class="time">___time___</span>
        <span class="user">___sender___</span>
    </div>
</div>
TEMPLATE;
$chattheme_cfg->user_message_right = <<<TEMPLATE
<div class='chat-message ___mymessageclass___'>
    <div class="right">
        <span class="text triangle-border right">___message___</span>
        <span class="picture">___avatar___</span>
    </div>
    <div class="chat-message-meta right">
        <span class="time">___time___</span>
        <span class="user">___sender___</span>
    </div>
</div>
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
TEMPLATE;
