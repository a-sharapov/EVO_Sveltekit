<!-- Site Settings -->
<div class="tab-page" id="tabPage2">
    <h2 class="tab"><?php echo e(ManagerTheme::getLexicon('settings_site')); ?></h2>
    <script type="text/javascript">tpSettings.addTabPage(document.getElementById('tabPage2'));</script>
    <div class="container container-body">
        <?php if(! isset($fileSetting['site_status'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'site_status',
                'label' => ManagerTheme::getLexicon('sitestatus_title'),
                'small' => '[(site_status)]',
                'value' => $settings['site_status'],
                'options' => [
                    1 =>  ManagerTheme::getLexicon('online'),
                    0 => ManagerTheme::getLexicon('offline'),
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['site_name'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'site_name',
                'label' => ManagerTheme::getLexicon('sitename_title'),
                'small' => '[(site_name)]',
                'value' => $settings['site_name'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="255"',
                'comment' => ManagerTheme::getLexicon('sitename_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['site_start'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'site_start',
                'label' => ManagerTheme::getLexicon('sitestart_title'),
                'small' => '[(site_start)]',
                'value' => $settings['site_start'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="255"',
                'comment' => ManagerTheme::getLexicon('sitestart_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['error_page'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'error_page',
                'label' => ManagerTheme::getLexicon('errorpage_title'),
                'small' => '[(error_page)]',
                'value' => $settings['error_page'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="10"',
                'comment' => ManagerTheme::getLexicon('errorpage_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['unauthorized_page'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'unauthorized_page',
                'label' => ManagerTheme::getLexicon('unauthorizedpage_title'),
                'small' => '[(unauthorized_page)]',
                'value' => $settings['unauthorized_page'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="10"',
                'comment' => ManagerTheme::getLexicon('unauthorizedpage_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>


             <?php echo $__env->make('manager::form.input', [
                        'name' => 'ControllerNamespace',
                        'label' => ManagerTheme::getLexicon('controller_namespace'),
                        'small' => '[(ControllerNamespace)]',
                        'value' => (isset($settings['ControllerNamespace']))? $settings['ControllerNamespace'] : '',
                        'attributes' => 'onchange="documentDirty=true;" maxlength="255"',
                        'comment' => ManagerTheme::getLexicon('controller_namespace_message')
                  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <div class="split my-1"></div>

             <?php echo $__env->make('manager::form.input', [
                        'name' => 'UpgradeRepository',
                        'label' => ManagerTheme::getLexicon('update_repository'),
                        'small' => '[(UpgradeRepository)]',
                        'value' => (isset($settings['UpgradeRepository']))? $settings['UpgradeRepository'] : '',
                        'attributes' => 'onchange="documentDirty=true;" maxlength="255"',
                        'comment' => ManagerTheme::getLexicon('update_repository_message')
                  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <div class="split my-1"></div>

        <?php if(! isset($fileSetting['site_unavailable_page'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'site_unavailable_page',
                'label' => ManagerTheme::getLexicon('siteunavailable_page_title'),
                'small' => '[(site_unavailable_page)]',
                'value' => $settings['site_unavailable_page'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="10"',
                'comment' => ManagerTheme::getLexicon('siteunavailable_page_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['site_unavailable_message'])): ?>
            <?php echo $__env->make('manager::form.textarea', [
                'name' => 'site_unavailable_message',
                'id' => 'site_unavailable_message_textarea',
                'for' => 'site_unavailable_message_textarea',
                'label' => ManagerTheme::getLexicon('siteunavailable_title') . '<br>' .
                    ManagerTheme::getLexicon('update_settings_from_language') .
                    ManagerTheme::view('form.selectElement', [
                        'name' => 'reload_site_unavailable',
                        'id' => 'reload_site_unavailable_select',
                        'class' => 'form-control-sm',
                        'attributes' => 'onchange="confirmLangChange(this, \'siteunavailable_message_default\', \'site_unavailable_message_textarea\');"',
                        'first' => [
                            'text' => ManagerTheme::getLexicon('language_title')
                        ],
                        'options' => $langKeys,
                        'as' => 'values',
                        'ucwords' => true
                    ]) .
                    ManagerTheme::view('form.inputElement', [
                        'type' => 'hidden',
                        'name' => 'siteunavailable_message_default',
                        'id' => 'siteunavailable_message_default_hidden',
                        'value' => addslashes(ManagerTheme::getLexicon('siteunavailable_message_default'))
                    ])
                ,
                'small' => '[(site_unavailable_message)]',
                'value' => (ManagerTheme::getLexicon('site_unavailable_message') ? ManagerTheme::getLexicon('site_unavailable_message') : ManagerTheme::getLexicon('siteunavailable_message_default')),
                'attributes' => 'onchange="documentDirty=true;"',
                'rows' => 4,
                'comment' => ManagerTheme::getLexicon('siteunavailable_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['default_template'])): ?>
            <?php echo $__env->make('manager::form.row', [
                'name' => 'default_template',
                'label' => ManagerTheme::getLexicon('defaulttemplate_title'),
                'small' => '[(default_template)]',
                'element' => ManagerTheme::view('form.selectElement', [
                    'name' => 'default_template',
                    'value' => $settings['default_template'],
                    'options' => $templates['items'],
                    'attributes' => 'onchange="documentDirty=true;wrap=document.getElementById(\'template_reset_options_wrapper\');if(this.options[this.selectedIndex].value!=' . $settings['default_template'] . '){wrap.style.display=\'block\';}else{wrap.style.display=\'none\';}" size="1"'
                    ]) .
                    '<div id="template_reset_options_wrapper" style="display:none;">' .
                        ManagerTheme::view('form.radio', [
                            'name' => 'reset_template',
                            'options' => [
                                1 => ManagerTheme::getLexicon('template_reset_all'),
                                2 => sprintf(ManagerTheme::getLexicon('template_reset_specific'), $templates['oldTmpName'])
                            ]
                        ]) .
                    '</div>' .
                    ManagerTheme::view('form.inputElement', [
                        'type' => 'hidden',
                        'name' => 'old_template',
                        'value' => $templates['oldTmpId']
                    ]),
                'comment' => ManagerTheme::getLexicon('defaulttemplate_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['auto_template_logic'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'auto_template_logic',
                'label' => ManagerTheme::getLexicon('defaulttemplate_logic_title'),
                'small' => '[(auto_template_logic)]',
                'value' => $settings['auto_template_logic'],
                'options' => [
                    'system' => ManagerTheme::getLexicon('defaulttemplate_logic_system_message'),
                    'parent' => ManagerTheme::getLexicon('defaulttemplate_logic_parent_message'),
                    'sibling' => ManagerTheme::getLexicon('defaulttemplate_logic_sibling_message')
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['chunk_processor'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'chunk_processor',
                'label' => ManagerTheme::getLexicon('chunk_processor'),
                'small' => '[(chunk_processor)]',
                'value' => $settings['chunk_processor'],
                'options' => [
                    '' => 'DocumentParser',
                    'DLTemplate' => 'DLTemplate'
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['enable_filter'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'enable_filter',
                'label' => ManagerTheme::getLexicon('enable_filter_title'),
                'small' => '[(enable_filter)]',
                'value' => $settings['enable_filter'],
                'options' => [
                    1 => [
                        'text' => ManagerTheme::getLexicon('yes'),
                        'disabled' => $phxEnabled
                    ],
                    0 => [
                        'text' => ManagerTheme::getLexicon('no'),
                        'disabled' => $phxEnabled
                    ]
                ],
                'comment' => ManagerTheme::getLexicon('enable_filter_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['enable_at_syntax'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'enable_at_syntax',
                'label' => ManagerTheme::getLexicon('enable_at_syntax_title'),
                'small' => '[(enable_at_syntax)]',
                'value' => $settings['enable_at_syntax'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('enable_at_syntax_message') .
                '<ul>
                    <li><a href="https://github.com/modxcms/evolution/wiki/@@IF-@@ELSEIF-@@ELSE-@@ENDIF" target="_blank">@@IF @@ELSEIF @@ELSE @@ENDIF</a></li>
                    <li>&lt;@LITERAL&gt; {{string}} [*string*] [[string]] &lt;@ENDLITERAL&gt;</li>
                    <li><!--@- Do not output -@--></li>
                </ul>'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['publish_default'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'publish_default',
                'label' => ManagerTheme::getLexicon('defaultpublish_title'),
                'small' => '[(publish_default)]',
                'value' => $settings['publish_default'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('defaultpublish_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['cache_default'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'cache_default',
                'label' => ManagerTheme::getLexicon('defaultcache_title'),
                'small' => '[(cache_default)]',
                'value' => $settings['cache_default'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('defaultcache_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['search_default'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'search_default',
                'label' => ManagerTheme::getLexicon('defaultsearch_title'),
                'small' => '[(search_default)]',
                'value' => $settings['search_default'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('defaultsearch_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['auto_menuindex'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'auto_menuindex',
                'label' => ManagerTheme::getLexicon('defaultmenuindex_title'),
                'small' => '[(auto_menuindex)]',
                'value' => $settings['auto_menuindex'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('defaultmenuindex_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['custom_contenttype'])): ?>
            <?php echo $__env->make('manager::form.row', [
                'label' => ManagerTheme::getLexicon('custom_contenttype_title'),
                'for' => 'txt_custom_contenttype',
                'element' => '
                    <div class="input-group">' .
                        ManagerTheme::view('form.inputElement', [
                            'name' => 'txt_custom_contenttype',
                            'attributes' => 'onChange="documentDirty=true;" maxlength="100"'
                        ]) .
                        '<div class="input-group-btn">' .
                            ManagerTheme::view('form.inputElement', [
                                'type' => 'button',
                                'value' => ManagerTheme::getLexicon('add'),
                                'attributes' => 'onclick="addContentType();"'
                            ]) .
                        '</div>
                    </div>
                    <div class="col-auto col-sm-4 mt-1">' .
                        ManagerTheme::view('form.selectElement', [
                            'name' => 'lst_custom_contenttype',
                            'attributes' => 'size="5"',
                            'options' => explode(',', $settings['custom_contenttype']),
                            'as' => 'values'
                        ]) .
                    '</div>
                    <div class="col-auto col-sm-2 mt-1">' .
                        ManagerTheme::view('form.inputElement', [
                            'type' => 'button',
                            'name' => 'removecontenttype',
                            'value' => ManagerTheme::getLexicon('remove'),
                            'attributes' => 'onclick="removeContentType()"'
                        ]) .
                    '</div>' .
                    ManagerTheme::view('form.inputElement', [
                        'type' => 'hidden',
                        'name' => 'custom_contenttype',
                        'value' => $settings['custom_contenttype']
                    ]),
                'comment' => ManagerTheme::getLexicon('custom_contenttype_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['docid_incrmnt_method'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'docid_incrmnt_method',
                'label' => ManagerTheme::getLexicon('docid_incrmnt_method_title'),
                'small' => '[(docid_incrmnt_method)]',
                'value' => $settings['docid_incrmnt_method'],
                'options' => [
                    0 => ManagerTheme::getLexicon('docid_incrmnt_method_0'),
                    1 => ManagerTheme::getLexicon('docid_incrmnt_method_1'),
                    2 => ManagerTheme::getLexicon('docid_incrmnt_method_2')
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['enable_cache'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'enable_cache',
                'label' => ManagerTheme::getLexicon('enable_cache_title'),
                'small' => '[(enable_cache)]',
                'value' => $settings['enable_cache'],
                'options' => [
                    1 => ManagerTheme::getLexicon('enabled'),
                    0 => ManagerTheme::getLexicon('disabled'),
                    2 => ManagerTheme::getLexicon('disabled_at_login')
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['disable_chunk_cache'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'disable_chunk_cache',
                'label' => ManagerTheme::getLexicon('disable_chunk_cache_title'),
                'small' => '[(disable_chunk_cache)]',
                'value' => $settings['disable_chunk_cache'] ?? 0,
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no'),
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>


        <?php if(! isset($fileSetting['disable_snippet_cache'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'disable_snippet_cache',
                'label' => ManagerTheme::getLexicon('disable_snippet_cache_title'),
                'small' => '[(disable_snippet_cache)]',
                'value' => $settings['disable_snippet_cache'] ?? 0,
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no'),
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>


        <?php if(! isset($fileSetting['disable_chunk_cache'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'disable_plugins_cache',
                'label' => ManagerTheme::getLexicon('disable_plugins_cache_title'),
                'small' => '[(disable_plugins_cache)]',
                'value' => $settings['disable_plugins_cache'] ?? 0,
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no'),
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>


        <?php if(! isset($fileSetting['cache_type'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'cache_type',
                'label' => ManagerTheme::getLexicon('cache_type_title'),
                'small' => '[(cache_type)]',
                'value' => $settings['cache_type'],
                'options' => [
                    1 => ManagerTheme::getLexicon('cache_type_1'),
                    2 => ManagerTheme::getLexicon('cache_type_2')
                ]
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['minifyphp_incache'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'minifyphp_incache',
                'label' => ManagerTheme::getLexicon('minifyphp_incache_title'),
                'small' => '[(minifyphp_incache)]',
                'value' => $settings['minifyphp_incache'],
                'options' => [
                    1 => ManagerTheme::getLexicon('enabled'),
                    0 => ManagerTheme::getLexicon('disabled')
                ],
                'comment' => ManagerTheme::getLexicon('minifyphp_incache_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['server_offset_time'])): ?>
            <?php echo $__env->make('manager::form.select', [
                'name' => 'server_offset_time',
                'label' => ManagerTheme::getLexicon('serveroffset_title'),
                'small' => '[(server_offset_time)]',
                'value' => $settings['server_offset_time'],
                'options' => $serverTimes,
                'attributes' => 'onChange="documentDirty=true;" size="1"',
                'comment' => sprintf(ManagerTheme::getLexicon('serveroffset_message'), evolutionCMS()->toDateFormat(time(), 'timeOnly'), evolutionCMS()->toDateFormat(time() + $settings['server_offset_time'], 'timeOnly'))
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['server_protocol'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'server_protocol',
                'label' => ManagerTheme::getLexicon('server_protocol_title'),
                'small' => '[(server_protocol)]',
                'value' => $settings['server_protocol'],
                'options' => [
                    'http' => ManagerTheme::getLexicon('server_protocol_http'),
                    'https' => ManagerTheme::getLexicon('server_protocol_https')
                ],
                'comment' => ManagerTheme::getLexicon('server_protocol_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['rss_url_news'])): ?>
            <?php echo $__env->make('manager::form.input', [
                'name' => 'rss_url_news',
                'label' => ManagerTheme::getLexicon('rss_url_news_title'),
                'small' => '[(rss_url_news)]',
                'value' => $settings['rss_url_news'],
                'attributes' => 'onchange="documentDirty=true;" maxlength="350"'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php if(! isset($fileSetting['track_visitors'])): ?>
            <?php echo $__env->make('manager::form.radio', [
                'name' => 'track_visitors',
                'label' => ManagerTheme::getLexicon('track_visitors_title'),
                'small' => '[(track_visitors)]',
                'value' => $settings['track_visitors'],
                'options' => [
                    1 => ManagerTheme::getLexicon('yes'),
                    0 => ManagerTheme::getLexicon('no')
                ],
                'comment' => ManagerTheme::getLexicon('track_visitors_message')
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="split my-1"></div>
        <?php endif; ?>

        <?php echo get_by_key($tabEvents, 'OnSiteSettingsRender'); ?>

    </div>
</div>
<?php /**PATH /var/www/html/manager//views//page/system_settings/general.blade.php ENDPATH**/ ?>