<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace Hdphp\Error;

use hdphp\kernel\ServiceProvider;

class ErrorProvider extends ServiceProvider {

	//延迟加载
	public $defer = FALSE;

	public function boot() {
		$this->app['Error']->bootstrap();
	}

	public function register() {
		$this->app->single( 'Error', function ( $app ) {
			return new Error( $app );
		}, TRUE );
	}
}