<?php
echo '
<div class="block mt">
	<div class="blocktitle"><span class="fl">点击榜</span>
		<ul class="tabf fr">
		<li><a href="javascript:void(0)" onclick="selecttab(this);" class="selected">周</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">月</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">总</a></li>
		</ul>
	</div>
	<div class="blockcontent">
		<div>'.$this->_tpl_vars['jieqi_pageblocks']['11']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['12']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['13']['content'].'</div>
	</div>
</div>

<div class="block">
	<div class="blocktitle"><span class="fl">推荐榜</span>
		<ul class="tabf fr">
		<li><a href="javascript:void(0)" onclick="selecttab(this);" class="selected">周</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">月</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">总</a></li>
		</ul>
	</div>
	<div class="blockcontent">
		<div>'.$this->_tpl_vars['jieqi_pageblocks']['21']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['22']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['23']['content'].'</div>
	</div>
</div>

<div class="block">
	<div class="blocktitle"><span class="fl">鲜花榜</span>
		<ul class="tabf fr">
		<li><a href="javascript:void(0)" onclick="selecttab(this);" class="selected">周</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">月</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">总</a></li>
		</ul>
	</div>
	<div class="blockcontent">
		<div>'.$this->_tpl_vars['jieqi_pageblocks']['31']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['32']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['33']['content'].'</div>
	</div>
</div>

<div class="block">
	<div class="blocktitle"><span class="fl">月票榜</span>
		<ul class="tabf fr">
		<li><a href="javascript:void(0)" onclick="selecttab(this);" class="selected">周</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">月</a></li>
		<li><a href="javascript:void(0)" onclick="selecttab(this);">总</a></li>
		</ul>
	</div>
	<div class="blockcontent">
		<div>'.$this->_tpl_vars['jieqi_pageblocks']['41']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['42']['content'].'</div>
		<div style="display:none;">'.$this->_tpl_vars['jieqi_pageblocks']['43']['content'].'</div>
	</div>
</div>

<div class="block">
	<div class="blocktitle">收藏榜</div>
	<div class="blockcontent">'.$this->_tpl_vars['jieqi_pageblocks']['51']['content'].'</div>
</div>

<div class="block">
	<div class="blocktitle">字数榜</div>
	<div class="blockcontent">'.$this->_tpl_vars['jieqi_pageblocks']['61']['content'].'</div>
</div>

<div class="block">
	<div class="blocktitle">编辑推荐</div>
	<div class="blockcontent">'.$this->_tpl_vars['jieqi_pageblocks']['71']['content'].'</div>
</div>

<div class="block">
	<div class="blocktitle">最新入库</div>
	<div class="blockcontent">'.$this->_tpl_vars['jieqi_pageblocks']['81']['content'].'</div>
</div>';
?>