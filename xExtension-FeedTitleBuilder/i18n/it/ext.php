<?php

return array(
	'FeedTitleBuilder' => array(
		'label4Template' => 'Template del titolo feed',
		'helping' => 'Ci sono alcune sezioni speciali che consentono di personalizzare il vostro titolo di feed personale.',
		'help4origtitle' => 'Usa questo codice per definire dove mostrare il titolo originale di questo feed',
		'help4date' => 'Con questo codice puoi aggiungere la data del giorno nel tuo formato preferito. Usa il tuo motore di ricerca web preferito per scoprire quali parametri sono disponibili nella funzione data in PHP.<br />Cerca dettagli: <a href="https://www.php.net/manual/en/function.date.php" target="_blank" rel="noopener nofollow">https://www.php.net/manual/en/function.date.php</a><br />Esempio: {date}ymd{/date} => 20190401',
		'help4phpparseurl' => 'L\'URL sarà diviso con la funzione PHP <code>parse_url</code> e si può ottenere il valore specifico del risultato.<br />Cerca dettagli: <a href="https://www.php.net/manual/en/function.parse-url.php" target="_blank" rel="noopener nofollow">https://www.php.net/manual/en/function.parse-url.php</a>',
		'help4phpparseurlvalues' => 'Sono disponibili le seguenti parole speciali:',
		'help4phpparseurlschema' => 'Otterrai \'HTTP\', \'HTTPS\', \'FTP\' o l\'un l\'altro. Es. \'HTTPS\'',
		'help4phpparseurlhost' => 'Nell\'esempio si otterrà \'github.com\'.',
		'help4phpparseurlport' => 'Otterrai la porta che è nell\'URL definito.',
		'help4phpparseurluser' => 'Otterrai l\'utente che è nell\'URL definito.',
		'help4phpparseurlpass' => 'Riceverai la password che è nell\'URL definito.',
		'help4phpparseurlpath' => 'Nell\'esempio si otterrà \'/FreshRSS/FreshRSS\'.',
		'help4phpparseurlquery' => 'Otterrai il testo tra \'?\' e \'#\'.',
		'help4phpparseurlfragment' => 'Riceverai il testo dopo \'#\'.',
		'help4phpparseurlhostspecial' => 'Forse la parola chiave \'host\' ti dà troppo, in modo da poter utilizzare le seguenti parole speciali. Questi sono i valori separati da \'.\' <unk> di \'host\'.',
		'help4phpparseurlhostsub' => 'Si otterrà il testo completo prima del penultimo punto.',
		'help4phpparseurlhostname' => 'Otterrai il testo tra il penultimo e l\'ultimo punto.',
		'help4phpparseurlhosttld' => 'Riceverai il testo dopo l\'ultimo punto.',
		'example' => 'Esempio',
		'example_template_code' => 'Codice modello:',
		'example_url' => 'URL:',
		'example_title' => 'Titolo del feed generato:',
		'info' => 'Informazioni:',
		'infodesc' => 'Se il modello è vuoto, otterrai il titolo originale del feed aggiunto!',
	),
);