<!-- Default meta tags -->
	@if(isset($article->meta))
	<meta name="description" content="{{ $article->meta }}"/>
	<meta property="og:description" content="{{ $article->meta }}"/>
	<meta name="twitter:description" content="{{ $article->meta }}"/>
	@else
	<meta name="description" content="Hello my name is Refo Junior, i'm a website developer based in Denpasar, Bali. I'm a Student at STMIK STIKOM Bali. I really love to make a website and other software engineering, because this is my passion."/>
	<meta property="og:description" content="Hello my name is Refo Junior, i'm a website developer based in Denpasar, Bali. I'm a Student at STMIK STIKOM Bali. I really love to make a website and other software engineering, because this is my passion."/>
	<meta name="twitter:description" content="Hello my name is Refo Junior, i'm a website developer based in Denpasar, Bali. I'm a Student at STMIK STIKOM Bali. I really love to make a website and other software engineering, because this is my passion."/>
	@endif
	<meta name="copyright" content="RefoJunior">
	<meta name="author" content="RefoJunior"/>
	<meta name="application-name" content="RefoJunior">
	@if(isset($article->cover))
	<meta property="image" content="{{asset('storage/cover/'. $article->cover)}}">
	<meta property="og:image" content="{{asset('storage/cover/'. $article->cover)}}">
	@else
	<meta property="image" content="img/welcome.jpg">
	@endif
	
	<meta property="og:site_name" content="RefoJunior">
	<meta property="og:url" content="https://refojunior.com"/>
	
	
	<meta property="og:locale" content="id_ID"/>
	<meta property="og:type" content="website">

	<meta name="twitter:card" content="summary"/>

	