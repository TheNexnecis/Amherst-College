<?php

namespace App\Http\Controllers;

class ShoppingList extends Controller
{
    /**
     * Show the shopping list for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function showList($id)
    {
        return view(/*'user_Shopping_List'*/, [/*'list' => sList::find($id)*/]);
    }
	
	/**
     * Save new item to the shopping list for the given user.
     *
     * @param  int   $id
	 * @param  array $form
     * @return View
     */
    public function insertIntoList($id,$form)
    {
        return view(/*'user_Shopping_List'*/, [/*'list' => sList::update($id,$form)*/]);
    }
	
	/**
     * Remove item from shopping list for the given user.
     *
     * @param  int   $id
	 * @param  int   $giftID
     * @return View
     */
    public function deleteFromList($id,$giftID)
    {
        return view(/*'user_Shopping_List'*/, [/*'list' => sList::delete($id,$giftID)*/]);
    }	
}
