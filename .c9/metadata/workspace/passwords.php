{"filter":false,"title":"passwords.php","tooltip":"/passwords.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":11,"column":0}},"lines":["$USERS[\"username1\"] = \"password1\";","$USERS[\"username2\"] = \"password2\";","$USERS[\"username3\"] = \"password3\";","  ","function check_logged(){","     global $_SESSION, $USERS;","     if (!array_key_exists($_SESSION[\"logged\"],$USERS)) {","          header(\"Location: login.php\");","     };","};"]},{"action":"insertText","range":{"start":{"row":11,"column":0},"end":{"row":11,"column":2}},"text":"?>"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":2},"end":{"row":11,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1409671967028,"hash":"c48f31a8bd4c52e6e66827dc4f3f6cfbc4002057"}