<?php

namespace App\Locale;


final class ChineseSimplified implements LangInterface
{
	static public function code()
	{
		return '简体中文';
	}

	static public function get_locale()
	{
		$locale	= array(
			'USERNAME'		=> '用户名',
			'PASSWORD'		=> '密码',
			'ENTER'			=> '确定',
			'CANCEL'		=> '取消',
			'SIGN_IN'		=> '登录',
			'CLOSE'			=> '关闭',
			'SETTINGS'      => 'Settings',
			'SEARCH'        => 'Search ...',
			'MORE'          => 'More',

			'USERS'				=> 'Users',
			'SHARING'			=> 'Sharing',
			'CHANGE_LOGIN'		=> '修改登录信息',
			'CHANGE_SORTING'	=> '修改排序',
			'SET_DROPBOX'		=> '设置 Dropbox',
			'ABOUT_LYCHEE'		=> '关于 Lychee',
			'DIAGNOSTICS'		=> '诊断',
			'LOGS'				=> '查看日志',
			'SIGN_OUT'			=> '注销登录',
			'UPDATE_AVAILABLE'	=> '可用更新！',
			'DEFAULT_LICENSE'	=> 'Default license for new uploads:',
			'SET_LICENSE'		=> 'Set License',
			'SET_OVERLAY_TYPE'	=> 'Set Overlay',


			'SMART_ALBUMS'		=> '智能相册',
			'SHARED_ALBUMS'		=> 'Shared albums',
			'ALBUMS'			=> '相册',
			'PHOTOS'			=> 'Pictures',

			'RENAME'			=> '重命名',
			'RENAME_ALL'		=> '重命名已选中',
			'MERGE'				=> '合并',
			'MERGE_ALL'			=> '合并选中',
			'MAKE_PUBLIC' 		=> '设为公开',
			'SHARE_ALBUM' 		=> '分享相册',
			'SHARE_PHOTO' 		=> '分享照片',
			'DOWNLOAD_ALBUM'	=> '下载相册',
			'ABOUT_ALBUM'		=> '关于相册',
			'DELETE_ALBUM'		=> '删除相册',
			'MOVE_ALBUM'		=> 'Move Album',
			'FULLSCREEN_ENTER'	=> 'Enter Fullscreen',
			'FULLSCREEN_EXIT'	=> 'Exit Fullscreen',

			'DELETE_ALBUM_QUESTION' 		=> '删除相册和照片',
			'KEEP_ALBUM'					=> '保留相册',
			'DELETE_ALBUM_CONFIRMATION_1' 	=> '是否确认删除相册',
			'DELETE_ALBUM_CONFIRMATION_2'	=> '以及相册中包含的所有照片？操作后不可恢复！',

			'DELETE_ALBUMS_QUESTION' 		=> '删除相册和照片',
			'KEEP_ALBUMS'					=> '保留相册',
			'DELETE_ALBUMS_CONFIRMATION_1'	=> '是否确认删除全部',
			'DELETE_ALBUMS_CONFIRMATION_2'	=> '选中的相册和其中的所有照片？操作后不可恢复！',

			'DELETE_UNSORTED_CONFIRM' 		=> '是否确认删除\'未分类\'的所有照片？<br>操作后不可恢复！',
			'CLEAR_UNSORTED'				=> '清除未分类',
			'KEEP_UNSORTED'					=> '保留未分类',

			'EDIT_SHARING'					=> '编辑共享',
			'MAKE_PRIVATE'					=> '设为私有',

			'CLOSE_ALBUM'					=> '关闭相册',
			'CLOSE_PHOTO'					=> '关闭照片',

			'ADD'							=> '添加',
			'MOVE'							=> '移动',
			'MOVE_ALL'						=> '移动选中',
			'DUPLICATE'						=> '创建副本',
			'DUPLICATE_ALL'					=> '复制选定的',
			'COPY_TO'						=> '复制到...',
			'COPY_ALL_TO'					=> '选定副本到...',
			'DELETE'						=> '删除',
			'DELETE_ALL'					=> '删除已选中',
			'DOWNLOAD'						=> '下载',
			'UPLOAD_PHOTO'					=> '上传相片',
			'IMPORT_LINK'					=> '从链接导入',
			'IMPORT_DROPBOX'				=> '从 Dropbox 导入',
			'IMPORT_SERVER'					=> '从服务器导入',
			'NEW_ALBUM'						=> '新建相册',

			'TITLE_NEW_ALBUM'			=> '输入相册标题：',
			'UNTITLED'					=> '未命名',
			'UNSORTED'					=> '未分类',
			'STARRED'					=> '星标',
			'RECENT'					=> '最新',
			'PUBLIC'					=> '公开',
			'NUM_PHOTOS'				=> '照片',

			'CREATE_ALBUM'				=> '创建相册',

			'STAR_PHOTO'				=> '星标相片',
			'STAR'						=> '星标',
			'STAR_ALL'					=> '将所选的标记为收藏夹',
			'TAGS'						=> '标签',
			'TAGS_ALL'					=> '批量打标签',
			'UNSTAR_PHOTO'				=> '取消星标',

			'FULL_PHOTO'				=> '照片原图',
			'ABOUT_PHOTO'				=> '关于照片',
			'DIRECT_LINK'				=> '外链',

			'ALBUM_ABOUT'				=> '关于',
			'ALBUM_BASICS'				=> '基本信息',
			'ALBUM_TITLE'				=> '标题',
			'ALBUM_NEW_TITLE'			=> '输入新的相册标题：',
			'ALBUMS_NEW_TITLE_1'		=> '设置标题为',
			'ALBUMS_NEW_TITLE_2'		=> '已选择的所有相册：',
			'ALBUM_SET_TITLE'			=> '设置标题',
			'ALBUM_DESCRIPTION'			=> '描述',
			'ALBUM_NEW_DESCRIPTION'		=> '输入新的相册描述：',
			'ALBUM_SET_DESCRIPTION'		=> '设置描述',
			'ALBUM_ALBUM'				=> '相册',
			'ALBUM_CREATED'				=> '创建时间',
			'ALBUM_IMAGES'				=> '图片信息',
			'ALBUM_VIDEOS'				=> 'Videos',
			'ALBUM_SUBALBUMS'			=> 'Subalbums',
			'ALBUM_SHARING'				=> '共享',
			'ALBUM_SHR_YES'				=> '是',
			'ALBUM_SHR_NO'				=> '否',
			'ALBUM_PUBLIC'				=> '公开',
			'ALBUM_HIDDEN'				=> '隐藏',
			'ALBUM_HIDDEN_EXPL'			=> '只有使用外链才能查看。',
			'ALBUM_DOWNLOADABLE'		=> '下载',
			'ALBUM_DOWNLOADABLE_EXPL'	=> '访客可以下载该相册。',
			'ALBUM_PASSWORD'			=> '密码',
			'ALBUM_PASSWORD_PROT'		=> '密码保护',
			'ALBUM_PASSWORD_PROT_EXPL'	=> '只有使用正确的密码才可以访问相册。',
			'ALBUM_PASSWORD_REQUIRED' 	=> '这是一个密码保护的相册。请输入密码：',
			'ALBUM_MERGE_1'				=> '你确认要合并相册',
			'ALBUM_MERGE_2'				=> '到该相册',
			'ALBUMS_MERGE'				=> '你确认要合并所有选择的相册到该相册',
			'MERGE_ALBUM'				=> '合并相册',
			'DONT_MERGE'				=> "不要合并",
			'ALBUM_MOVE_1'				=> 'Are you sure you want to move the album',
			'ALBUM_MOVE_2'				=> 'into the album',
			'ALBUMS_MOVE'				=> 'Are you sure you want to move all selected albums into the album',
			'MOVE_ALBUMS'				=> "Move Albums",
			'NOT_MOVE_ALBUMS'			=> "Don't Move",
			'ROOT'						=> "相册",
			'ALBUM_REUSE'				=> "Reuse",
			'ALBUM_LICENSE'				=> 'License',
			'ALBUM_SET_LICENSE'			=> 'Set License',
			'ALBUM_LICENSE_HELP'		=> 'Need help choosing?',
			'ALBUM_LICENSE_NONE'		=> 'None',
			'ALBUM_RESERVED'			=> 'All Rights Reserved',

			'PHOTO_ABOUT'				=> '关于',
			'PHOTO_BASICS'				=> '基本信息',
			'PHOTO_TITLE'				=> '标题',
			'PHOTO_NEW_TITLE'			=> '输入新的照片标题：',
			'PHOTO_SET_TITLE'			=> '设置标题',
			'PHOTO_UPLOADED'			=> '已上传',
			'PHOTO_DESCRIPTION'			=> '描述',
			'PHOTO_NEW_DESCRIPTION'		=> '输入新的照片描述',
			'PHOTO_SET_DESCRIPTION'		=> '设置描述',
			'PHOTO_NEW_LICENSE'			=> 'Add a License',
			'PHOTO_SET_LICENSE'			=> 'Set License',
			'PHOTO_LICENSE'				=> 'License',
			'PHOTO_REUSE'				=> 'Reuse',
			'PHOTO_LICENSE_NONE'		=> 'None',
			'PHOTO_RESERVED'			=> 'All Rights Reserved',
			'PHOTO_IMAGE'				=> '图片信息',
			'PHOTO_VIDEO'				=> 'Video',
			'PHOTO_SIZE'				=> '大小',
			'PHOTO_FORMAT'				=> '格式',
			'PHOTO_RESOLUTION'			=> '分辨率',
			'PHOTO_DURATION'			=> 'Duration',
			'PHOTO_FPS'				    => 'Frame rate',
			'PHOTO_TAGS'				=> '标签',
			'PHOTO_NOTAGS'				=> '无标签',
			'PHOTO_NEW_TAGS'			=> '为该照片添加标签。用逗号分隔多个标签：',
			'PHOTO_NEW_TAGS_1'			=> '批量添加标签',
			'PHOTO_NEW_TAGS_2'			=> '已选择的照片。已存在的标签会被覆盖。用逗号分隔多个标签：',
			'PHOTO_SET_TAGS'			=> '设置标签',
			'PHOTO_CAMERA'				=> '相机信息',
			'PHOTO_CAPTURED'			=> '拍摄时间',
			'PHOTO_MAKE'				=> '设备',
			'PHOTO_TYPE'				=> '类型/型号',
			'PHOTO_SHUTTER'				=> '快门速度',
			'PHOTO_APERTURE'			=> '光圈',
			'PHOTO_FOCAL'				=> '焦距',
			'PHOTO_ISO'					=> '感光度',
			'PHOTO_SHARING'				=> '共享',
			'PHOTO_SHR_PLUBLIC'			=> '公开',
			'PHOTO_SHR_ALB'				=> '是 (相册)',
			'PHOTO_SHR_PHT'				=> '是 (照片)',
			'PHOTO_SHR_NO'				=> '否',
			'PHOTO_DELETE'				=> '删除照片',
			'PHOTO_KEEP'				=> '保留照片',
			'PHOTO_DELETE_1'			=> '是否要删除照片',
			'PHOTO_DELETE_2'			=> '？操作后不可恢复！',
			'PHOTO_DELETE_ALL_1'		=> '是否要删除全部',
			'PHOTO_DELETE_ALL_2'		=> '已选择的照片？操作后不可恢复！',
			'PHOTOS_NEW_TITLE_1' 		=> '批量设置照片标题',
			'PHOTOS_NEW_TITLE_2' 		=> '已选择的照片：',
			'PHOTO_MAKE_PRIVATE_ALBUM'	=> '此照片位于公开相册中。编辑所在相册的可见性，将其设置为公开或私有。',
			'PHOTO_SHOW_ALBUM'			=> '显示相册',

			'LOADING'					=> '载入中',
			'ERROR'						=> '错误',
			'ERROR_TEXT'				=> '噢，似乎出了一些问题。请刷新页面后再试！',
			'ERROR_DB_1'				=> '无法链接输入库，访问被拒绝。请仔细检查主机、用户名和密码，确保允许从当前位置访问。',
			'ERROR_DB_2'				=> '无法创建数据库。请仔细检查主机、用户名和密码，确保该拥有有权限在数据库中添加和修改内容。',
			'ERROR_CONFIG_FILE'			=> "无法保存配置。<b>'data/'</b> 拒绝访问。请为其他用户设置 <b>'data/'</b> 和 <b>'uploads/'</b> 目录的读写权限。查看自述文件以获取更多信息。",
			'ERROR_UNKNOWN'				=> '发生未知问题！请再试一次，检查您的安装和服务器。请查看自述文件以获取更多信息。',
			'ERROR_LOGIN'				=> '无法保存登录信息。请用另一个用户名和密码再试一次！',
			'SUCCESS'					=> 'OK',
			'RETRY'						=> '重试',

			'SETTINGS_SUCCESS_LOGIN'		=> 'Login Info updated.',
			'SETTINGS_SUCCESS_SORT'			=> 'Sorting order updated.',
			'SETTINGS_SUCCESS_DROPBOX'		=> 'Dropbox Key updated.',
			'SETTINGS_SUCCESS_LANG'			=> 'Language updated',
			'SETTINGS_SUCCESS_LAYOUT'		=> 'Layout updated',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY'=> 'EXIF Overlay setting updated',
			'SETTINGS_SUCCESS_LICENSE'		=> 'Default license updated',

			'DB_INFO_TITLE'				=> '请输入数据库信息',
			'DB_INFO_HOST'				=> '数据库主机 (可选)',
			'DB_INFO_USER'				=> '数据库用户名',
			'DB_INFO_PASSWORD'			=> '数据库密码',
			'DB_INFO_TEXT'				=> 'Lychee 将自行创建数据库。如果需要，可以使用已有数据库：',
			'DB_NAME'					=> '数据库名称 (可选)',
			'DB_PREFIX'					=> '表前缀 (可选)',
			'DB_CONNECT'				=> '连接',

			'LOGIN_TITLE'				=> '输入管理员用户名和密码：',
			'LOGIN_USERNAME' 			=> '新用户名',
			'LOGIN_PASSWORD' 			=> '新密码',
			'LOGIN_PASSWORD_CONFIRM' 	=> 'Confirm Password',
			'LOGIN_CREATE'				=> '创建',

			'PASSWORD_TITLE'			=> '输入当前密码',
			'USERNAME_CURRENT'			=> 'Current Username',
			'PASSWORD_CURRENT'			=> '当前密码',
			'PASSWORD_TEXT'				=> '用户名和密码将被修改为：',
			'PASSWORD_CHANGE'			=> '修改登录信息',


			'EDIT_SHARING_TITLE'		=> '编辑共享',
			'EDIT_SHARING_TEXT'			=> '相册的共享属性将被修改为：',
			'SHARE_ALBUM_TEXT'			=> '该相册的共享属性：',

			'SORT_ALBUM_BY_1'			=> '相册排序',
			'SORT_ALBUM_BY_2'			=> 'in an',
			'SORT_ALBUM_BY_3'			=> 'order.',

			'SORT_ALBUM_SELECT_1'		=> '创建时间',
			'SORT_ALBUM_SELECT_2'		=> '标题',
			'SORT_ALBUM_SELECT_3'		=> '描述',
			'SORT_ALBUM_SELECT_4'		=> '公开',
			'SORT_ALBUM_SELECT_5'		=> '最新',
			'SORT_ALBUM_SELECT_6'		=> '最老',


			'SORT_PHOTO_BY_1'			=> '照片排序',
			'SORT_PHOTO_BY_2'			=> 'in an',
			'SORT_PHOTO_BY_3'			=> 'order.',

			'SORT_PHOTO_SELECT_1'		=> '上传时间',
			'SORT_PHOTO_SELECT_2'		=> '创建时间',
			'SORT_PHOTO_SELECT_3'		=> '标题',
			'SORT_PHOTO_SELECT_4'		=> '描述',
			'SORT_PHOTO_SELECT_5'		=> '公开',
			'SORT_PHOTO_SELECT_6'		=> '喜欢',
			'SORT_PHOTO_SELECT_7'		=> '照片格式',

			'SORT_ASCENDING'			=> '升序',
			'SORT_DESCENDING'			=> '降序',
			'SORT_CHANGE'				=> '修改排序',

			'DROPBOX_TITLE'				=> '设置 Dropbox 秘钥',
			'DROPBOX_TEXT'				=> "要从 Dropbox 导入照片，需要一个有效的应用秘钥，请到 <a href='https://www.dropbox.com/developers/apps/create'>官网获取</a>。输入你自己生成的私钥：",

			'LANG_TEXT'					=> 'Change Lychee language for:',
			'LANG_TITLE'				=> 'Change Language',
			'IMAGE_OVERLAY_TEXT'		=> 'Display data overlay by default:',
			'OVERLAY_TYPE'				=> 'Data to use in image overlay:',
			'OVERLAY_EXIF'				=> 'Photo EXIF data',
			'OVERLAY_DESCRIPTION'		=> 'Photo description',
			'OVERLAY_DATE'				=> 'Photo date taken',
			'LAYOUT_TYPE'				=> 'Layout of photos:',
			'LAYOUT_SQUARES'			=> 'Square thumbnails',
			'LAYOUT_JUSTIFIED'			=> 'With aspect, justified',
			'LAYOUT_UNJUSTIFIED'			=> 'With aspect, unjustified',
			'SET_LAYOUT'				=> 'Change layout',

			'VIEW_NO_RESULT'			=> '无结果',
			'VIEW_NO_PUBLIC_ALBUMS'		=> '没有公开相册',
			'VIEW_NO_CONFIGURATION'		=> '没有配置',
			'VIEW_PHOTO_NOT_FOUND'		=> '没找到照片',

			'NO_TAGS'					=> '没有标签',

			'UPLOAD_MANAGE_NEW_PHOTOS'	=> '现在可以管理你的新照片了。',
			'UPLOAD_COMPLETE'			=> '上传完成',
			'UPLOAD_COMPLETE_FAILED'	=> '有几个照片上传失败了。',
			'UPLOAD_IMPORTING'			=> '导入',
			'UPLOAD_IMPORTING_URL'		=> '导入 URL',
			'UPLOAD_UPLOADING'			=> '上传中',
			'UPLOAD_FINISHED'			=> '已完成',
			'UPLOAD_PROCESSING'			=> '处理中',
			'UPLOAD_FAILED'				=> '失败',
			'UPLOAD_FAILED_ERROR'		=> '上传失败。服务器返回了一个错误！',
			'UPLOAD_FAILED_WARNING'		=> '上传失败。服务器返回了一个警告！',
			'UPLOAD_SKIPPED'			=> '已跳过',
			'UPLOAD_ERROR_CONSOLE'		=> '请查看浏览器控制台获取详细信息。',
			'UPLOAD_UNKNOWN'			=> '服务器返回未知响应。请查看浏览器控制台获取详细信息。',
			'UPLOAD_ERROR_UNKNOWN'		=> '上传失败。服务器返回了一个未知错误！',
			'UPLOAD_IN_PROGRESS'		=> 'Lychee 当前正在上传！',
			'UPLOAD_IMPORT_WARN_ERR'	=> '导入成功，但返回了的警告或错误。请查看日志（设置->显示日志）以获取详细信息。',
			'UPLOAD_IMPORT_COMPLETE'	=> '导入完成',
			'UPLOAD_IMPORT_INSTR'		=> '输入照片链接直接导入：',
			'UPLOAD_IMPORT'				=> '导入',
			'UPLOAD_IMPORT_SERVER'		=> '从服务器导入',
			'UPLOAD_IMPORT_SERVER_FOLD'	=> '文件夹中没有可读的文件。请查看日志（设置->显示日志）以获取详细信息。',
			'UPLOAD_IMPORT_SERVER_INSTR'=> '此操作将导入位于以下目录中的所有照片、文件夹和子文件夹。导入完成后，在可能的情况下 <b>源文件将被删除</b>。',
			'UPLOAD_ABSOLUTE_PATH'		=> '绝对路径',
			'UPLOAD_IMPORT_SERVER_EMPT'	=> '无法导入空文件夹！',

			'ABOUT_SUBTITLE'			=> 'Self-hosted photo-management done right',
			'ABOUT_DESCRIPTION'			=> 'is a free photo-management tool, which runs on your server or web-space. Installing is a matter of seconds. Upload, manage and share photos like from a native application. Lychee comes with everything you need and all your photos are stored securely.',
			'FOOTER_COPYRIGHT'			=> '本网站上的所有图像均受版权所有',
			'HOSTED_WITH_LYCHEE'        =>'Hosted with Lychee',
		);

		return $locale;
	}
}