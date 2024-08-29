<?php

// admin users
$admin_menu_items = ['Dashboard', 'Pedidos', 'Relatórios', 'Clientes', 'Vendas', 'Contas', 'Configurações', 'Perfil'];

// seller 
$seller_menu_items = ['Dashboard', 'Pedidos', 'Clientes', 'Vendas', 'Perfil'];

// dynamic choose logged in user
$menu_items = rand(0, 1) == 0 ? $admin_menu_items : $seller_menu_items;


$breadcrumb_title = 'Relatório Mensal';
$breadcrumb_path = ['Home', 'Vendas', 'Relatórios', 'Mensal'];
