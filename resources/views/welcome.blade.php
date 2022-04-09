<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-indigo-300 flex flex-wrap justify-center">

        <h2 class="bg-indigo-700 text-indigo-300 font-medium border border-transparent shadow-lg p-3 m-0 rounded w-2/12 break-words w-full mb-8 text-center text-2xl">
            Laravel Collections
        </h2>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('avg') }}">{{ ucfirst('avg') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('max') }}">{{ ucfirst('max') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('median') }}">{{ ucfirst('median') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('min') }}">{{ ucfirst('min') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('collapse') }}">{{ ucfirst('collapse') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('chunk') }}">{{ ucfirst('chunk') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('combine') }}">{{ ucfirst('combine') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('combine') }}">{{ ucfirst('combine') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('concat') }}">{{ ucfirst('concat') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('contains') }}">{{ ucfirst('contains') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('count') }}">{{ ucfirst('count') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('crossJoin') }}">{{ ucfirst('crossJoin') }} </a>
        
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('diff') }}">{{ ucfirst('diff') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('diffUsing') }}">{{ ucfirst('diffUsing') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('tap') }}">{{ ucfirst('tap') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('map') }}">{{ ucfirst('map') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('mapWithKeys') }}">{{ ucfirst('mapWithKeys') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('mapSpread') }}">{{ ucfirst('mapSpread') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="#mapInto">
        {{  ucfirst('Map Int') }} </a>
        <!-- MAP INTO IS USED WHEN YOU WANT TO PERFORM FUNCTIONS ON COLLECTION FROM ANOTHER CLASS -->
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('mapToDictionary') }}">{{ ucfirst('mapToDictionary') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('whereAndWhereStrict') }}">{{ ucfirst('whereAndWhereStrict') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('whereBetweenAndWhereNotBetween') }}">{{ ucfirst('whereBetweenAndWhereNotBetween') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('WhereInAndWhereInStrict') }}">{{ ucfirst('WhereInAndWhereInStrict') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('WhereNotInAndWhereNotInStrict') }}">{{ ucfirst('WhereNotInAndWhereNotInStrict') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('WhereInstanceOf') }}">{{ ucfirst('WhereInstanceOf') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('firstWhere') }}">{{ ucfirst('firstWhere') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('wrap') }}">{{ ucfirst('wrap') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('unwrap') }}">{{ ucfirst('unwrap') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('filter') }}">{{ ucfirst('filter') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('pluck') }}">{{ ucfirst('pluck') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('dd') }}">{{ ucfirst('dd') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('zip') }}">{{ ucfirst('zip') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('sort') }}">{{ ucfirst('sort') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('sortBy') }}">{{ ucfirst('sortBy') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('groupBy') }}">{{ ucfirst('groupBy') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('first') }}">{{ ucfirst('first') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('last') }}">{{ ucfirst('last') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('isEmpty') }}">{{ ucfirst('isEmpty') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('reverse') }}">{{ ucfirst('reverse') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('take') }}">{{ ucfirst('take') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('nth') }}">{{ ucfirst('nth') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('only') }}">{{ ucfirst('only') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('eachAndEachSPread') }}">{{ ucfirst('eachAndEachSPread') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('dump') }}">{{ ucfirst('dump') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('times') }}">{{ ucfirst('times') }} </a>

        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('allAndToArray') }}">{{ ucfirst('allAndToArray') }} </a>
        <a class="bg-indigo-600 border shadow p-2 m-2 text-lg text-indigo-300 font-medium border-transparent rounded w-2/12 break-words text-center hover:bg-indigo-700 hover:text-indigo-100" href="{{ route('toJson') }}">{{ ucfirst('toJson') }} </a>

        <h2 class="bg-indigo-700 text-indigo-300 font-medium border border-transparent shadow-lg p-3 m-0 rounded w-2/12 break-words w-full mt-8 text-center text-2xl">
            copyright @2022
        </h2>
    </body>
</html>
