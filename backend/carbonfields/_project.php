<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Projekt')
    ->where('post_type', '=', 'project')
    ->add_fields([
        Field::make('select', 'project_area', 'Darstellungsbereich')
            ->set_options([
                'photography' => 'Fotografie',
                'film'        => 'Film',
                'creative'    => 'Kreativ',
            ])
    ->set_required(),
        Field::make('image', 'image', 'Bild')->set_required(),
        Field::make('textarea', 'description', 'Beschreibung')->set_required()->set_help_text('wird für den Teaser auf Startseite benötigt'),
        Field::make('textarea', 'lead', 'Lead')->set_required(),
        Field::make('rich_text', 'text', 'Text')->set_required(),
        Field::make('text', 'video_url', 'Video-URL'),
        Field::make('complex', 'gallery', 'Galerie'),
        Field::make('association', 'related_projects', 'Weitere Projekte'),
        // Felder hier einfügen
    ]);