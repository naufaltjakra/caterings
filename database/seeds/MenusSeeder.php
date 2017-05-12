<?php

use Illuminate\Database\Seeder;
use App\Menu;
use App\Category;

class MenusSeeder extends Seeder
{
    public function run()
    {
    		// Sample Category
        $menuSiang = Category::create(['title' => 'Menu Siang']);
        $menuSiang->childs()->saveMany([
        	new Category(['title' => 'Masakan Jawa']),
        	new Category(['title' => 'Masakan Padang']),
        	new Category(['title' => 'Masakan Betawi']),
        	new Category(['title' => 'Masakan Jepang'])
      	]);

      	$menuMalam = Category::create(['title' => 'Menu Malam']);
        $menuMalam->childs()->saveMany([
        	new Category(['title' => 'Jawa']),
        	new Category(['title' => 'Padang']),
        	new Category(['title' => 'Betawi']),
        	new Category(['title' => 'Jepang'])
      	]);

      	// Sample menu
      	$masakanJawa = Category::where('title', 'Masakan Jawa')->first();
      	$masakanPadang = Category::where('title', 'Masakan Padang')->first();
      	$siang1 = Menu::create([
      			'name' => 'Bento Deluxe Box',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Siang',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 20000]);
      	$siang2 = Menu::create([
      			'name' => 'Snack Box Furry',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Siang',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 24000]);
      	$siang3 = Menu::create([
      			'name' => 'Super Besar',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Siang',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 30000]);
      	$siang4 = Menu::create([
      			'name' => 'Rice Box Special',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Siang',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 27000]);
      	$masakanJawa->menus()->saveMany([$siang1, $siang2, $siang3]);
      	$masakanPadang->menus()->saveMany([$siang1, $siang4]);

      	$betawi = Category::where('title', 'Betawi')->first();
      	$jepang = Category::where('title', 'Jepang')->first();
      	$malam1 = Menu::create([
      			'name' => 'Malam Rica-rica',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Malam',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 20000]);
      	$malam2 = Menu::create([
      			'name' => 'Knight Panthom',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Malam',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 24000]);
      	$malam3 = Menu::create([
      			'name' => 'The Dark Night',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Malam',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 30000]);
      	$malam4 = Menu::create([
      			'name' => 'Nightfurry',
      			'picture' => 'bento.jpg',
      			'type' => 'Menu Malam',
      			'description' => 'Paket makan siang dengan menu beragam, lengkap, dan porsi yang pas.',
      			'price' => 27000]);
      	$betawi->menus()->saveMany([$malam1, $malam2, $malam3]);
      	$jepang->menus()->saveMany([$malam3, $malam4]);
    }
}
