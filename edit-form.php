<div>▼キーワード入力</div>
<div>
	<input type="text" name="keyword" value="<?php echo esc_html(get_post_meta(get_the_ID(), 'keyword', true)); ?>" />
</div>
<div>▼ディスクリプション入力</div>
<div>
	<input type="text" name="description" value="<?php echo esc_html(get_post_meta(get_the_ID(), 'description', true)); ?>" />
</div>
<style>
	#DescriptionAndKeyword input {
		padding: 3px 8px;
		font-size: 1.7em;
		line-height: 100%;
		height: 1.7em;
		width: 100%;
		outline: 0;
		margin: 0 0 3px;
		background-color: #ffe;
	}
</style>