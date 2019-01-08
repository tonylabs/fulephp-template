<?php

return array
(
    'env' => array
    (
        'browser_not_support' => '对不起，您的浏览器不支持此功能，请升级或安装最新版本。',
        'last_updated' => '最后更新',
    ),

    'home' => array
    (
        'hero_title' => '连接，轻触，保驾护航',
        'hero_description' => '由Google，Microsoft，VISA和Bank of America等公司支持的技术联盟，旨在解决强认证设备之间缺乏互操作性的问题。',
        'hero_button' => '开始体验',
        'list_of_websites' => '已经支持 U2F 的网站应用，并持续在增加',

        'introduction_subtitle' => '让我们开始吧',
        'introduction_title' => '只属于你的安全卫士',
        'introduction_description' => 'Virtue 是一款基于',

        'why_title' => '为什么你需要一个 Virtue 密钥?',
        'why_description' => 'U2F 是一种目前正在快速普及的开放认证标准，是实现两步认证的一种方式。使用任何支持 U2F 标准的物理设备(如 USB Key)，只需简单地触摸一下设备就可以安全地实现两步认证。简单地说，用户登录的时候先输入用户名、密码，然后插入 Key 触摸一下就完成登录认证了。没有这个物理设备的人即使知道了你的用户名、密码也无法通过认证，而这个物理设备只有你手上才有。',

        'how_it_works_title' => '它是如何工作的？',
        'how_it_works_description' => '双因素验证是一种新的安全验证标准，目标U2F (Universal 2nd Factor) is a new standard that aims to make super-strong two-step verification simple. To use it, you need to purchase a dedicated security key. These are small devices that plug into the USB port on your computer.',

        'universal_title' => '',
        'universal_description' => '传统的物理设备认证，比如网银的U盾，每家服务都需用要他们自己单独提供的设备，这样你就会有很多这种东西，携带和保管都不方便。而 Virtue 使用 U2F 作为开放标准，你只需要一个设备就可以在所有支持该标准的认证服务上使用，而不用拥有一堆设备。比如 A 网站和 B 网站已支持 U2F 双因素认证标准，这样你手上的这一个 Virtue 就可以同时作为A、B两家网站的双因素认证设备。',

        'benefits_subtitle' => '显而易见',
        'benefits_title' => '坚如磐石，越来越强',
        'benefits_description' => '与传统用户名和密码登录方式相比，采用物理硬件进行双因素验证，大大加强了用户身份的安全性，即使账户信息遭遇泄漏或窃取，低成本的物理硬件加密仍可保护您的账户安全。',

        'benefits' => array
        (
            'individual_title' => '个人用户',
            'individual_description' => 'Virtue 可有效阻止钓鱼网站窃取您的账号，保护个人隐私及财务安全。',

            'security_title' => '反钓鱼',
            'security_description' => 'A U2F security key is much more secure against phishing compared to SMS 2FA or an authenticator app for multiple reasons. Firstly, it’s an isolated system that doesn’t live on an operating system with a large attack surface.',

            'privacy_title' => '高强度隐私保护',
            'privacy_description' => '每个用户还可以选择具有多个身份，包括匿名（没有与身份相关联的个人信息）。 U2F设备为每个服务生成一对新密钥，公钥仅存储在它连接的特定服务上。 通过这种方法，服务提供商之间不会分享任何秘密，即使是低成本的U2F设备也可以支持任意数量的服务。',

            'easy_title' => '简单易用',
            'easy_description' => '无需用户掌握专业知识，即插即用。',

            'enterprise_title' => '企业用户',
            'enterprise_description' => '自 Google 公司于2017年要求其85，000员工使用物理设备进行身份验证以来，免于钓鱼攻击，极大的加强了企业内部系统的安全性。',

            'cost_title' => '成本效益',
            'cost_description' => 'Virtue 是一款低成本可大规模部署的硬件产品，企业每年在安全保护投入的资金与人力远大于部署双因素验证方案产生的支出。',

            'identity_title' => '电子身份',
            'identity_description' => '对于需要更高级别身份保证的服务，正在开发在线和物理世界中的服务，以便将您的U2F设备与您的真实身份联系起来。',

            'recovery_title' => '安全恢复',
            'recovery_description' => 'Virtue 还可以实现安全恢复。 用户可以向每个服务提供商注册两个U2F设备，以防一个设备放错地方。 服务提供商还可以为用户提供可以存储在安全位置的备份代码。',

        ),

        'integration_subtitle' => '合作共赢',
        'integration_title' => '免费部署服务',
        'integration_description' => 'Virtue 企业版用户享有免费的快速部署服务，专业的架构师将根据贵司提供的 IT 系统架构，评估并提供完备的双因素验证部署方案 (Virture Program)，加快整合进程。',
        'integration_button' => '开始评估',





    ),

    'subscription' => array
    (
        'title' => '不要错过，即刻加入订阅',
        'name' => '姓名',
        'name_placeholder' => '您的姓名',
        'email' => '电子邮件',
        'email_placeholder' => '常用电子邮件地址',
        'button' => '订阅',
        'thank_you' => '谢谢！您将第一时间了解我们的动态。'
    ),

    'integration' => array
    (
        'title' => '集成服务',
        'choose_a_plan' => '选购方案',

        'tabs' => array
        (
            'application_form' => '申请表格',
            'document' => '签署文档',
            'timeline' => '进度安排',
            'fees' => '相关费用'
        ),

        'application' => array
        (
            'first_name' => '名字',
            'last_name' => '姓氏',
            'email' => '电子邮件',
            'country' => '国家',
            'company' => '公司/组织/机构名称',
            'platform' => array
            (
                'label' => '平台',
                'select' => '请选择',
                'options' => array
                (
                    'application' => '操作系统应用程序，如 Windows, Linux 或 Mac 平台运行应用程序',
                    'cms' => '开源内容管理系统，如 Drupal, WordPress, Joomla',
                    'internal_system' => '自研内部办公系统',
                    'third_party' => '第三方应用程序，如金蝶，用友'
                ),
            ),
            'programming_language' => array
            (
                'label' => '编程语言',
                'select' => '请选择'
            ),

            'contact_name' => '技术部门负责人',
            'contact_email' => '负责人电子邮件',
            'description' => '描述',
            'copy_me' => '将以上内容以邮件形式抄送',
            'captcha' => '验证码',
            'submit' => '提交',
            'messages' => array
            (
                'invalid_captcha' => '验证码校验失败，请重新输入。',
                'success' => '感谢您宝贵的时间！申请表已成功提交，我们会尽快安排专员与贵司技术人员对接。'
            )
        ),

        'timeline' => array
        (
            'step1' => array
            (
                'title' => '收集信息',
                'description' => '',
                'button' => '下一步'
            ),

        ),
    ),

    'auth' => array
    (
        'signup' => array
        (
            'messages' => array
            (
                'privacy' => '注册信息仅用于测试用途',
                'password_not_match' => '确认密码与密码不符，请重新输入！',
                'invalid_captcha' => '验证码校验失败，请重新输入。'
            ),
            'title' => '注册',
            'subtitle' => '本页面仅用于测试注册账号并登记 Virtue 设备',
            'signin_button' => '登录',
            'description' => '本功能仅用于测试体验 Virtue 产品，不影响您在其他网站中使用 Virtue。如果您在测试中遇到问题，请检查您的浏览器是否已安装 U2F 插件，或请安装最新的 Google Chrome 浏览器。',
            'remark' => '输入常用邮件地址，不建议随机输入邮件地址，您将无法进行登录测试。如测试完成不再使用，您仍可注销账号。',
            'email' => '电子邮件',
            'email_help' => '电子邮件地址将作为您的用户名',
            'password' => '密码',
            'confirm' => '确认密码',
            'confirm_help' => '请再次输入密码',
            'next_button' => '提交',

        ),
        'signin' => array
        (
            'messages' => array
            (
                'privacy' => '注册信息仅用于测试用途',
                'password_not_match' => '确认密码与密码不符，请重新输入！',
                'invalid_captcha' => '验证码校验失败，请重新输入。',
                'account_not_found' => '未找到相关账户，请'
            ),
            'title' => '登录',
            'subtitle' => '本页面仅用于测试注册账号并登记 Virtue 设备',
            'signup_button' => '注册',
            'description' => '本功能仅用于测试体验 Virtue 产品，不影响您在其他网站中使用 Virtue。如果您在测试中遇到问题，请检查您的浏览器是否已安装 U2F 插件，或请安装最新的 Google Chrome 浏览器。',
            'remark' => '输入常用邮件地址，不建议随机输入邮件地址，您将无法进行登录测试。如测试完成不再使用，您仍可注销账号。',
            'email' => '电子邮件',
            'email_help' => '电子邮件地址将作为您的用户名',
            'password' => '密码',
            'confirm' => '确认密码',
            'confirm_help' => '请再次输入密码',
            'next_button' => '提交',
        ),

        'twofactor' => array
        (
            'title' => '双因素验证',
        )
    ),

    'faq' => array
    (
        'title' => '常见问题',

        'activation' => array
        (
            'title' => '如何激活我的 Virtue?',
            'description' => 'Virtue 出厂时内置了高强度加密且唯一的安全密钥，无需任何激活操作，即插即用。'
        ),

        'lost' => array
        (
            'title' => '遗失 Virtue 我该怎么办? 数据会泄漏吗？',
            'description' => ''
        ),

        'subscription' => array
        (
            'title' => '',
            'description' => ''
        ),
        'cancellation' => array
        (
            'title' => '停用 Virtue 之后，我该如何登录网站？',
            'description' => ''
        ),
    ),

    'account' => array
    (
        'profile' => array
        (
            'title' => '账户',

            'general' => array
            (
                'title' => '通用',
                'encryption' => '未公开的个人资料将通过加密技术保护',
                'privacy' => '查看隐私条款',
                'first_name' => '名字',
                'last_name' => '姓氏',
                'email' => '电子邮件',
                'email_help' => '登录时请使用电子邮件地址',
                'city' => '城市',
                'country' => '国家',
                'website' => '网站',
                'bio' => '自我介绍',
                'public' => '公开我的个人资料',
                'destroy' => '销毁',
                'save' => '保存',
                'messages' => array
                (
                    'updated' => '个人资料已更新。'
                )
            ),
            'keychain' => array
            (
                'title' => '钥匙链',
                'name' => '名称/编号',
                'rename' => '重命名',
                'remove' => '移除',
                'save' => '保存'
            ),
            'notification' => array
            (
                'title' => '通知'
            )
        )
    ),

    'article' => array
    (
        'created' => '发表于',
        'updated' => '最后更新',
        'likes' => '喜欢',
        'shares' => '分享',
        'categories' => '分类',
    ),

    'category' => array
    (
        'search_placeholder' => '搜索'
    ),

    'comment' => array
    (
        'reply' => '留言',
        'sort_by' => '排序',
        'sort' => array
        (
            'alphabetical' => '首字母',
            'newest' => '最新发表',
            'popular' => '热度'
        ),
        'helpful' => '本文对您有帮助吗',
        'contact_support' => '联系支持',
        'notify' => '有人回应时请通知我',
        'submit' => '发表',
        'cancel' => '取消'
    ),

    'case' => array
    (
        'subtitle' => '前车之鉴',
        'title' => '典型案例',
        'description' => '我们为您整理了以下案例',
        'view_all' => '浏览所有案例',
    ),

    'about' => array
    (
        'subtitle' => '了解拓朗',
        'title' => '为品质代言',
        'description' => '追逐',
        'overview' => '',
        'contact_us' => '联系我们',
        'company' => array
        (
            'name' => '上海拓朗信息技术有限公司',
            'address' => '上海市嘉定区沪宜公路5358号1层J1609室',
            'directions' => '查看线路',
        ),
    ),

    'nav' => array
    (
        'test_drive' => '开始体验',
        'case' => '典型案例',
        'support' => '技术支持',
        'pricing' => '价格',
        'about' => '了解拓朗',
        'user' => array
        (
            'profile' => '账户',
            'notifications' => '通知',
            'signout' => '退出登录'
        )
    ),

    'footer' => array
    (
        'lisence' => '授权',
        'support' => '技术支持',
        'term_of_service' => '服务条款',
        'about' => '了解拓朗',
        'contact_us' => '如有疑问'
    ),

    'breadcrumb' => array
    (
        'home' => 'Virtue',
        'test_drive' => '开始体验',
        'case' => '典型案例',
        'product' => '产品',
        'support' => '技术支持',
        'pricing' => '价格',
        'two_factor_authentication' => '双因素验证',
        'integration' => '系统集成',
        'account' => '账户',
        'notifications' => '通知'
    ),

    'support' => array
    (
        'subtitle' => '帮助与支持',
        'title' => '你好！有什么可以帮助您？',
        'search' => array
        (
            'placeholder' => '搜索关键字或主题',
            'button' => '搜索',
        ),
        'Browse topic by category' => '按主题浏览'
    ),

    'pricing' => array
    (
        'subtitle' => '投入 & 回报',
        'title' => '极具性价比的安全投入',
        'description' => '投入',
        'plans' => array
        (
            'includes' => '内含',
            'purchase' => '购买',
            'inquiry' => '开始评估',
            'monthly' => array
            (
                'title' => '月付',
                'personal' => array
                (
                    'title' => '个人用户',
                    'price' => '￥60',
                    'unit' => '每套'
                ),
                'group' => array
                (
                    'title' => '团体/组织',
                    'price' => '￥550',
                    'unit' => '每10套'
                ),
                'enterprise' => array
                (
                    'title' => '企业',
                    'price' => '￥3474',
                    'unit' => '每100套'
                )
            ),
            'yearly' => array
            (
                'title' => '年付',
                'personal' => array
                (
                    'title' => '个人用户',
                    'price' => '￥60',
                    'unit' => '每套'
                ),
                'group' => array
                (
                    'title' => '团体/组织',
                    'price' => '￥550',
                    'unit' => '每套'
                ),
                'enterprise' => array
                (
                    'title' => '企业',
                    'price' => '￥3474',
                    'unit' => '每套'
                )
            ),
        ),
        'reviews' => array
        (
            'title' => '客户反馈与评价'
        ),
    ),

    'client' => array
    (
        'subtitle' => '拓朗之贵宾',
        'title' => '合作伙伴',
        'description' => '安全'
    ),
);