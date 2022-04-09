<?php

use App\Http\Controllers\AllAndToArrayAndToJsonController;
use App\Http\Controllers\Collections2Controller;
use App\Http\Controllers\Collections3Controller;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ddZipController;
use App\Http\Controllers\DiffController;
use App\Http\Controllers\DumpAndTimesController;
use App\Http\Controllers\EachAndEachSpreadController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FirstAndLastController;
use App\Http\Controllers\IsEmptyAndIsNotEmptyController;
use App\Http\Controllers\PluckController;
use App\Http\Controllers\ReverseTakeNthOnlyController;
use App\Http\Controllers\SortAndSortByAndGroupByController;
use App\Http\Controllers\TapMapController;
use App\Http\Controllers\UnWrapController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WhereController;
use App\Http\Controllers\WrapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/header', [WelcomeController::class, 'header']);

Route::get('avg', [CollectionsController::class, 'avg'])->name('avg');
Route::get('max', [CollectionsController::class, 'max'])->name('max');
Route::get('median', [CollectionsController::class, 'median'])->name('median');
Route::get('min', [CollectionsController::class, 'min'])->name('min');

Route::get('collapse', [Collections2Controller::class, 'collapse'])->name('collapse');
Route::get('chunk', [Collections2Controller::class, 'chunk'])->name('chunk');
Route::get('combine', [Collections2Controller::class, 'combine'])->name('combine');
Route::get('concat', [Collections2Controller::class, 'concat'])->name('concat');
Route::get('contains', [Collections2Controller::class, 'contains'])->name('contains');

Route::get('count', [Collections3Controller::class, 'count'])->name('count');
Route::get('crossJoin', [Collections3Controller::class, 'crossJoin'])->name('crossJoin');

Route::get('diff', [DiffController::class, 'diff'])->name('diff');  // diff | diffAssoc | diffKeys
Route::get('diffUsing', [DiffController::class, 'diffUsing'])->name('diffUsing'); // diffUsing | diffAssocUsing | diffKeysUsing

Route::get('tap', [TapMapController::class, 'tap'])->name('tap');
Route::get('map', [TapMapController::class, 'map'])->name('map');
Route::get('mapWithKeys', [TapMapController::class, 'mapWithKeys'])->name('mapWithKeys');
// MAP INTO IS USED WHEN YOU WANT TO PERFORM FUNCTIONS ON COLLECTION FROM ANOTHER CLASS
Route::get('mapSpread', [TapMapController::class, 'mapSpread'])->name('mapSpread');
Route::get('mapToDictionary', [TapMapController::class, 'mapToDictionary'])->name('mapToDictionary');

Route::get('whereAndWhereStrict', [WhereController::class, 'whereAndWhereStrict'])->name('whereAndWhereStrict');
Route::get('whereBetweenAndWhereNotBetween', [WhereController::class, 'whereBetweenAndWhereNotBetween'])->name('whereBetweenAndWhereNotBetween');
Route::get('WhereInAndWhereInStrict', [WhereController::class, 'WhereInAndWhereInStrict'])->name('WhereInAndWhereInStrict');
Route::get('WhereNotInAndWhereNotInStrict', [WhereController::class, 'WhereNotInAndWhereNotInStrict'])->name('WhereNotInAndWhereNotInStrict');
Route::get('WhereInstanceOf', [WhereController::class, 'WhereInstanceOf'])->name('WhereInstanceOf');
Route::get('firstWhere', [WhereController::class, 'firstWhere'])->name('firstWhere');

Route::get('wrap', [WrapController::class, 'wrap'])->name('wrap');
Route::get('unwrap', [UnWrapController::class, 'unwrap'])->name('unwrap');

Route::get('filter', [FilterController::class, 'filter'])->name('filter');
Route::get('pluck', [PluckController::class, 'pluck'])->name('pluck');

Route::get('dd', [ddZipController::class, 'dd'])->name('dd');
Route::get('zip', [ddZipController::class, 'zip'])->name('zip');

Route::get('sort', [SortAndSortByAndGroupByController::class, 'sort'])->name('sort');
Route::get('sortBy', [SortAndSortByAndGroupByController::class, 'sortBy'])->name('sortBy');
Route::get('groupBy', [SortAndSortByAndGroupByController::class, 'groupBy'])->name('groupBy');

Route::get('first', [FirstAndLastController::class, 'first'])->name('first');
Route::get('last', [FirstAndLastController::class, 'last'])->name('last');

Route::get('isEmpty', [IsEmptyAndIsNotEmptyController::class, 'isEmpty'])->name('isEmpty');

Route::get('reverse', [ReverseTakeNthOnlyController::class, 'reverse'])->name('reverse');
Route::get('take', [ReverseTakeNthOnlyController::class, 'take'])->name('take');
Route::get('nth', [ReverseTakeNthOnlyController::class, 'nth'])->name('nth');
Route::get('only', [ReverseTakeNthOnlyController::class, 'only'])->name('only');

Route::get('eachAndEachSPread', [EachAndEachSpreadController::class, 'eachAndEachSPread'])->name('eachAndEachSPread');

Route::get('dump', [DumpAndTimesController::class, 'dump'])->name('dump');
Route::get('times', [DumpAndTimesController::class, 'times'])->name('times');

Route::get('allAndToArray', [AllAndToArrayAndToJsonController::class, 'allAndToArray'])->name('allAndToArray');
Route::get('toJson', [AllAndToArrayAndToJsonController::class, 'toJson'])->name('toJson');