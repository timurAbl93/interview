<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */
//USER

Admin::model('App\User')->title('Users')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('email')->label('Email'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name')->required(),
		FormItem::text('email', 'Email')->required()->unique(),
	]);
	return $form;
});

Admin::model('App\Interview')->title('Interview')->display(function (){
        
        $display = AdminDisplay::table();
	$display->columns([
		Column::string('title')->label('title'),
		
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('title', 'title')->required(),
                //FormItem::select('user_id', 'Users')->model('App\User')->display('email'),
		
	]);
	return $form;
});

// ANSWER

Admin::model('App\Answer')->title('Answers')->display(function (){
        
        $display = AdminDisplay::table();
	$display->columns([
		Column::string('title')->label('title'),
		
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('title', 'title')->required(),
                FormItem::select('quention_id', 'Quentions')->model('App\Quention')->display('title')->required(),
                FormItem::checkbox('is_true', 'Active'),
		
	]);
	return $form;
});
Admin::model('App\Quention')->title('Quentions')->display(function (){
        
        $display = AdminDisplay::table();
	$display->columns([
		Column::string('title')->label('title'),
                
	
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('title', 'title')->required(),
                FormItem::select('interview_id', 'Interview')->model('App\Interview')->display('title')->required(),
		
	]);
	return $form;
});
