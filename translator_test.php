<html>
	<head>
		<meta charset="UTF-8" />
	</head><body>
		<?php
			require 'translator.php';
			$translator = new Translator('pt-test', 'en-test', ['es-test', 'fr-test']);

			assert($translator->get('day_of_the_dead') == 'Día de Muertos');
			assert($translator->get('email') == 'email');
			assert($translator->get('good_day') == 'Bonjour!');
			assert($translator->get('hello_world') == 'Hello, world!');
			assert($translator->get('storage') == 'armazenamento');
		?>	
			<p>End of assertions.</p>
	</body>
</html>