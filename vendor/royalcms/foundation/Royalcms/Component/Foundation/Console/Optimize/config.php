<?php

$basePath = $royalcms['path.base'];

return [

    $basePath.'/vendor/symfony/debug/ExceptionHandler.php',
    $basePath.'/vendor/symfony/debug/ErrorHandler.php',
    $basePath.'/vendor/symfony/http-foundation/Request.php',
    $basePath.'/vendor/symfony/http-foundation/Response.php',
    $basePath.'/vendor/symfony/http-foundation/ParameterBag.php',
    $basePath.'/vendor/symfony/http-foundation/FileBag.php',
    $basePath.'/vendor/symfony/http-foundation/ServerBag.php',
    $basePath.'/vendor/symfony/http-foundation/HeaderBag.php',
    $basePath.'/vendor/symfony/http-foundation/Session/SessionInterface.php',
    $basePath.'/vendor/symfony/http-foundation/Session/SessionBagInterface.php',
    $basePath.'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
    $basePath.'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php',
    $basePath.'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php',
    $basePath.'/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
    $basePath.'/vendor/symfony/http-foundation/AcceptHeaderItem.php',
    $basePath.'/vendor/symfony/http-foundation/AcceptHeader.php',
    $basePath.'/vendor/symfony/http-foundation/ResponseHeaderBag.php',
    $basePath.'/vendor/symfony/http-foundation/Cookie.php',
    $basePath.'/vendor/symfony/http-kernel/HttpKernelInterface.php',
    $basePath.'/vendor/symfony/http-kernel/TerminableInterface.php',
    $basePath.'/vendor/symfony/routing/CompiledRoute.php',
    $basePath.'/vendor/symfony/routing/RouteCompilerInterface.php',
    $basePath.'/vendor/symfony/routing/RouteCompiler.php',
    $basePath.'/vendor/symfony/routing/Route.php',
    $basePath.'/vendor/symfony/finder/SplFileInfo.php',
    $basePath.'/vendor/symfony/finder/Expression/Glob.php',
    $basePath.'/vendor/symfony/finder/Expression/Regex.php',
    $basePath.'/vendor/symfony/finder/Expression/ValueInterface.php',
    $basePath.'/vendor/symfony/finder/Expression/Expression.php',
    $basePath.'/vendor/symfony/finder/Iterator/FilterIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/PathFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/FileTypeFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Iterator/FilenameFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Shell/Shell.php',
    $basePath.'/vendor/symfony/finder/Adapter/AdapterInterface.php',
    $basePath.'/vendor/symfony/finder/Adapter/AbstractAdapter.php',
    $basePath.'/vendor/symfony/finder/Adapter/AbstractFindAdapter.php',
    $basePath.'/vendor/symfony/finder/Adapter/GnuFindAdapter.php',
    $basePath.'/vendor/symfony/finder/Adapter/PhpAdapter.php',
    $basePath.'/vendor/symfony/finder/Adapter/BsdFindAdapter.php',
    $basePath.'/vendor/symfony/finder/Finder.php',
    $basePath.'/vendor/symfony/finder/Glob.php',
    $basePath.'/vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php',
    $basePath.'/vendor/symfony/finder/Comparator/Comparator.php',
    $basePath.'/vendor/symfony/finder/Comparator/NumberComparator.php',
    $basePath.'/vendor/symfony/translation/TranslatorInterface.php',
    $basePath.'/vendor/symfony/console/Command/Command.php',

    $basePath.'/vendor/royalcms/container/Royalcms/Component/Container/Container.php',

    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Container/Container.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Container/ContextualBindingBuilder.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Foundation/Royalcms.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Foundation/Application.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Bus/Dispatcher.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Bus/QueueingDispatcher.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Bus/HandlerResolver.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Pipeline/Pipeline.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Pipeline/Hub.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Logging/Log.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Debug/ExceptionHandler.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Config/Repository.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Events/Dispatcher.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/Renderable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/Arrayable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/Jsonable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/MessageProvider.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/MessageBag.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Support/Htmlable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Cookie/Factory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Cookie/QueueingFactory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Encryption/Encrypter.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Queue/QueueableEntity.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/Registrar.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/ResponseFactory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/UrlGenerator.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/UrlRoutable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/TerminableMiddleware.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Routing/Middleware.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Validation/ValidatesWhenResolved.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Validation/Factory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Validation/Validator.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/View/Factory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/View/View.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Http/Kernel.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Auth/Guard.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Auth/Access/Gate.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Auth/Access/Authorizable.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Auth/UserProvider.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Hashing/Hasher.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Pagination/Paginator.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Cache/Factory.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Cache/Store.php',
    $basePath.'/vendor/royalcms/contracts/Royalcms/Component/Contracts/Cache/Repository.php',

    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/AuthManager.php',
    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/Guard.php',
    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/Access/Gate.php',
    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/EloquentUserProvider.php',
    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/AuthServiceProvider.php',
    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Auth/Access/HandlesAuthorization.php',


    $basePath.'/vendor/royalcms/http/Royalcms/Component/Http/Request.php',
    $basePath.'/vendor/royalcms/http/Royalcms/Component/Http/Middleware/FrameGuard.php',
    $basePath.'/vendor/royalcms/http/Royalcms/Component/Http/ResponseTrait.php',
    $basePath.'/vendor/royalcms/http/Royalcms/Component/Http/Response.php',


    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Royalcms.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/EnvironmentDetector.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/ConfigureLogging.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/HandleExceptions.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/RegisterFacades.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/RegisterProviders.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/BootProviders.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/LoadConfiguration.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/DetectEnvironment.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/RegisterNamespaces.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/Booted.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bootstrap/Starting.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Http/Kernel.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Auth/AuthenticatesUsers.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Auth/RedirectsUsers.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Auth/RegistersUsers.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Auth/ResetsPasswords.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Auth/Access/AuthorizesRequests.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Http/Middleware/VerifyCsrfToken.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Http/Middleware/CheckForMaintenanceMode.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Http/FormRequest.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Bus/DispatchesJobs.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Validation/ValidatesRequests.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Providers/FoundationServiceProvider.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Providers/FormRequestServiceProvider.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Support/Providers/AuthServiceProvider.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Support/Providers/RouteServiceProvider.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Support/Providers/EventServiceProvider.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/AliasLoader.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/ProviderRepository.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Uri.php',
    $basePath.'/vendor/royalcms/foundation/Royalcms/Component/Foundation/Theme.php',


    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/ServiceProvider.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/AggregateServiceProvider.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Traits/Macroable.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Arr.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Str.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/NamespacedItemResolver.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Manager.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Collection.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/ViewErrorBag.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/MessageBag.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Facade.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Royalcms.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Route.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/View.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Log.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/DB.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Request.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Response.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Config.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Session.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Lang.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Cache.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/Event.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Facades/File.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/ArrayHelperTrait.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/StrHelperTrait.php',
    $basePath.'/vendor/royalcms/support/Royalcms/Component/Support/Format.php',

    $basePath.'/vendor/royalcms/validation/Royalcms/Component/Validation/ValidationServiceProvider.php',
    $basePath.'/vendor/royalcms/validation/Royalcms/Component/Validation/ValidatesWhenResolvedTrait.php',


    $basePath.'/vendor/royalcms/hashing/Royalcms/Component/Hashing/HashServiceProvider.php',
    $basePath.'/vendor/royalcms/hashing/Royalcms/Component/Hashing/BcryptHasher.php',

    $basePath.'/vendor/royalcms/pagination/Royalcms/Component/Pagination/AbstractPaginator.php',
    $basePath.'/vendor/royalcms/pagination/Royalcms/Component/Pagination/Paginator.php',
    $basePath.'/vendor/royalcms/pagination/Royalcms/Component/Pagination/PaginationServiceProvider.php',


    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/Repository.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/FileLoader.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/LoaderInterface.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/EnvironmentVariablesLoaderInterface.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/FileEnvironmentVariablesLoader.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/EnvironmentVariables.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/Dotenv.php',
    $basePath.'/vendor/royalcms/config/Royalcms/Component/Config/CompatibleTrait.php',

    $basePath.'/vendor/royalcms/filesystem/Royalcms/Component/Filesystem/FileHelperTrait.php',
    $basePath.'/vendor/royalcms/filesystem/Royalcms/Component/Filesystem/Filesystem.php',
    $basePath.'/vendor/royalcms/filesystem/Royalcms/Component/Filesystem/FilesystemServiceProvider.php',


    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/RoutingServiceProvider.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/ControllerServiceProvider.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/RouteDependencyResolverTrait.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Route.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Router.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Redirector.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/ResponseFactory.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/RouteCollection.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Controller.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/ControllerDispatcher.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/ControllerInspector.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/UrlGenerator.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Matching/ValidatorInterface.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Matching/HostValidator.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Matching/MethodValidator.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Matching/SchemeValidator.php',
    $basePath.'/vendor/royalcms/routing/Royalcms/Component/Routing/Matching/UriValidator.php',


    $basePath.'/vendor/royalcms/bus/Royalcms/Component/Bus/BusServiceProvider.php',
    $basePath.'/vendor/royalcms/bus/Royalcms/Component/Bus/Dispatcher.php',

    $basePath.'/vendor/royalcms/pipeline/Royalcms/Component/Pipeline/Pipeline.php',

    $basePath.'/vendor/royalcms/events/Royalcms/Component/Events/Dispatcher.php',
    $basePath.'/vendor/royalcms/events/Royalcms/Component/Events/EventServiceProvider.php',

    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/SessionInterface.php',
    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/StoreInterface.php',
    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/Middleware/StartSession.php',
    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/Store.php',
    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/SessionManager.php',
    $basePath.'/vendor/royalcms/session/Royalcms/Component/Session/SessionServiceProvider.php',

    $basePath.'/vendor/royalcms/cookie/Royalcms/Component/Cookie/CookieJar.php',
    $basePath.'/vendor/royalcms/cookie/Royalcms/Component/Cookie/Middleware/EncryptCookies.php',
    $basePath.'/vendor/royalcms/cookie/Royalcms/Component/Cookie/Middleware/AddQueuedCookiesToResponse.php',
    $basePath.'/vendor/royalcms/cookie/Royalcms/Component/Cookie/CookieServiceProvider.php',

    $basePath.'/vendor/royalcms/cache/Royalcms/Component/Cache/CacheServiceProvider.php',
    $basePath.'/vendor/royalcms/cache/Royalcms/Component/Cache/CacheManager.php',
    $basePath.'/vendor/royalcms/cache/Royalcms/Component/Cache/FileStore.php',
    $basePath.'/vendor/royalcms/cache/Royalcms/Component/Cache/Repository.php',

    $basePath.'/vendor/royalcms/encryption/Royalcms/Component/Encryption/BaseEncrypter.php',
    $basePath.'/vendor/royalcms/encryption/Royalcms/Component/Encryption/Encrypter.php',
    $basePath.'/vendor/royalcms/encryption/Royalcms/Component/Encryption/EncryptionServiceProvider.php',


    $basePath.'/vendor/royalcms/log/Royalcms/Component/Log/Writer.php',
    $basePath.'/vendor/royalcms/log/Royalcms/Component/Log/LogServiceProvider.php',
    $basePath.'/vendor/royalcms/log/Royalcms/Component/Log/FileStore.php',

    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Middleware/ShareErrorsFromSession.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Engines/EngineResolver.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/ViewFinderInterface.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/FileViewFinder.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Factory.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/View.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Engines/EngineInterface.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Engines/PhpEngine.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Engines/CompilerEngine.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Compilers/CompilerInterface.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Compilers/Compiler.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/Compilers/BladeCompiler.php',
    $basePath.'/vendor/royalcms/view/Royalcms/Component/View/ViewServiceProvider.php',

    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/Run.php',
    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/RunInterface.php',
    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/Handler/HandlerInterface.php',
    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/Handler/Handler.php',
    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/Handler/JsonResponseHandler.php',
    $basePath.'/vendor/royalcms/whoops/Royalcms/Component/Whoops/Util/SystemFacade.php',

    $basePath.'/vendor/royalcms/translation/Royalcms/Component/Translation/TranslationServiceProvider.php',
    $basePath.'/vendor/royalcms/translation/Royalcms/Component/Translation/FileLoader.php',
    $basePath.'/vendor/royalcms/translation/Royalcms/Component/Translation/LoaderInterface.php',
    $basePath.'/vendor/royalcms/translation/Royalcms/Component/Translation/Translator.php',
    $basePath.'/vendor/royalcms/translation/Royalcms/Component/Translation/CompatibleTrait.php',

    $basePath.'/vendor/royalcms/framework/Royalcms/Component/Redis/RedisServiceProvider.php',

    $basePath.'/vendor/royalcms/datetime/Royalcms/Component/DateTime/Carbon.php',


    $basePath.'/vendor/psr/log/Psr/Log/LoggerInterface.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Logger.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',


];