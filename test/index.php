<html>
	<head>
		<meta charset="UTF-8" />
	</head><body>
		<?php
			require '../translator.php';
			
			$translator = new Translator(['pt-test', 'en-test', 'es-test']);

			assert($translator->get('day_of_the_dead') == 'Día de Muertos');
			assert($translator->get('email') == 'email');
			assert($translator->get('hello_world') == 'Hello, world!');
			assert($translator->get('storage') == 'armazenamento');
			assert($translator->get_and_replace('count_to_three', [$translator->get('one'), $translator->get('two'), 'three' => $translator->get('three')]) == 'Eu sei contar até três: um, dois, três!');
		?>	
		<p>End of assertions.</p>
	</body>
</html>