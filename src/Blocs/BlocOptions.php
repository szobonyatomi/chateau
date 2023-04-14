<?php

namespace App\Blocs;


use Extended\ACF\Fields\Image;
use Extended\ACF\Fields\Link;
use Extended\ACF\Fields\PostObject;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Tab;
use Extended\ACF\Fields\Text;
use Extended\ACF\Fields\Textarea;
use Extended\ACF\Fields\WysiwygEditor;
use Extended\ACF\Location;

class BlocOptions extends Bloc
{
	public static $name = 'Options';
	public static $label = '[IC] - Options';
	public static $position = 'normal';

	protected static function fields(): array
	{
		return [
			Tab::make('Company info')->placement('left'),
			Textarea::make('Address', 'address'),
			Text::make('E-mail', 'email'),
			Repeater::make('Social network', 'social_network')->fields([
				Text::make('Link', 'link'),
				Text::make('Icon', 'icon')->instructions('To be retrieved from <a href="https://fontawesome.com/" target="_blank">FontAwesome</a>'),
			]),

			Tab::make('Footer première colonne')->placement('left'),
			Image::make('Logo footer', 'logo_footer'),
			Text::make('Titre réseaux sociaux', 'social_network_title'),

			Tab::make('Footer deuxième colonne')->placement('left'),
			Text::make('Titre', 'title_second'),
			Repeater::make('Liens dans la barre du copyright', 'links_second')
				->fields([
					Link::make('Lien', 'lien'),
				]),

			Tab::make('Footer troisième colonne')->placement('left'),
			Text::make('Titre', 'title_third'),
			WysiwygEditor::make('Horaires', 'horaires'),

			Tab::make('Footer quatrième colonne')->placement('left'),
			Text::make('Titre coordonnées', 'title_coordonnees'),
			WysiwygEditor::make('Coordonnées', 'coordonnees'),
			Text::make('Adresse e-mail', 'mail_address')->instructions('Pour éviter d\'être spammé, veuillez crypter l\'adresse email grâce à cet outil <a href="https://www.nicolas-hoffmann.net/utilitaires/crypteur.php" target="_blank">crypter l\'adresse email</a>'),
			WysiwygEditor::make('Textile', 'textile'),
			WysiwygEditor::make('Signmakin', 'signmaking'),

			Tab::make('Footer copyright')->placement('left'),
			WysiwygEditor::make('Copyright', 'copyright')->instructions('Mettez %YEAR% à l\'endroit ou vous souhaitez mettre la date'),
			Repeater::make('Liens dans la barre du copyright', 'links')
				->fields([
					Link::make('Lien', 'lien'),
				]),
			Tab::make('Configurations')->placement('left'),
			PostObject::make('Page référence', 'reference_page')
		];
	}

	protected static function location(): array
	{
		return [
			Location::where('options_page', '==', 'options'),
		];
	}
}
