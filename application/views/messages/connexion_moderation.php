<?php

echo form_open('messages/moderation_msg/'.$urlevenement);

echo form_label("Mot de passe", "mdp");
echo form_input('mdp', '','class="form-control"');

echo form_submit('submit', 'Submit', 'class="btn btn-default" type="password"');
echo form_close();

?>