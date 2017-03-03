@include(user('rule').'_rule.layout.inc.head')
@include(user('rule').'_rule.layout.inc.navbar')
@include(user('rule').'_rule.layout.inc.sidebar')
@include(user('rule').'_rule.layout.inc.breadcrumb')
@include(user('rule').'_rule.layout.inc.errors')

	@yield('content')

@include(user('rule').'_rule.layout.inc.footer')
@include(user('rule').'_rule.layout.inc.js')

@yield('js')


