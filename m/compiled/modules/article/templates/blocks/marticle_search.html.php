<?php
echo '	<div class="topsearch">
		<form name="t_frmsearch" method="post" action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/search.php" class="ts_form" onsubmit="if(document.getElementById(\'t_searchkey\').value == \'\'){alert(\'请输入搜索内容！\'); document.getElementById(\'t_searchkey\').focus(); return false;}">
		<div class="ts_input">
		<input name="searchkey" id="t_searchkey" type="text" class="ts_key" /><input name="searchtype" type="hidden" value="all" />
		</div>
		<div class="ts_post">
		<button type="submit" name="t_btnsearch" class="ts_submit iconfont">&#xee28;</button>
		</div>
		</form>
	</div>
';
?>