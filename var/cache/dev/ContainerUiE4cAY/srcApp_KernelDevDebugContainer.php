<?php

namespace ContainerUiE4cAY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService',
            'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand' => 'getDumpMappingCommandService',
            'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand' => 'getGenerateCommandService',
            'Sonata\\MediaBundle\\Command\\AddMassMediaCommand' => 'getAddMassMediaCommandService',
            'Sonata\\MediaBundle\\Command\\AddMediaCommand' => 'getAddMediaCommandService',
            'Sonata\\MediaBundle\\Command\\CleanMediaCommand' => 'getCleanMediaCommandService',
            'Sonata\\MediaBundle\\Command\\FixMediaContextCommand' => 'getFixMediaContextCommandService',
            'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand' => 'getMigrateToJsonTypeCommandService',
            'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand' => 'getRefreshMetadataCommandService',
            'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand' => 'getRemoveThumbsCommandService',
            'Sonata\\MediaBundle\\Command\\SyncThumbsCommand' => 'getSyncThumbsCommandService',
            'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand' => 'getUpdateCdnStatusCommandService',
            'Sonata\\UserBundle\\Action\\CheckEmailAction' => 'getCheckEmailActionService',
            'Sonata\\UserBundle\\Action\\CheckLoginAction' => 'getCheckLoginActionService',
            'Sonata\\UserBundle\\Action\\LoginAction' => 'getLoginActionService',
            'Sonata\\UserBundle\\Action\\LogoutAction' => 'getLogoutActionService',
            'Sonata\\UserBundle\\Action\\RequestAction' => 'getRequestActionService',
            'Sonata\\UserBundle\\Action\\ResetAction' => 'getResetActionService',
            'Sonata\\UserBundle\\Action\\SendEmailAction' => 'getSendEmailActionService',
            'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand' => 'getTwoStepVerificationCommandService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'mailer' => 'getMailerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.array_legacy' => 'getSonata_Core_Form_Type_ArrayLegacyService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.boolean_legacy' => 'getSonata_Core_Form_Type_BooleanLegacyService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.collection_legacy' => 'getSonata_Core_Form_Type_CollectionLegacyService',
            'sonata.core.form.type.color_legacy' => 'getSonata_Core_Form_Type_ColorLegacyService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_picker_legacy' => 'getSonata_Core_Form_Type_DatePickerLegacyService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_legacy' => 'getSonata_Core_Form_Type_DateRangeLegacyService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.date_range_picker_legacy' => 'getSonata_Core_Form_Type_DateRangePickerLegacyService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_picker_legacy' => 'getSonata_Core_Form_Type_DatetimePickerLegacyService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_legacy' => 'getSonata_Core_Form_Type_DatetimeRangeLegacyService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.datetime_range_picker_legacy' => 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.equal_legacy' => 'getSonata_Core_Form_Type_EqualLegacyService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService',
            'sonata.media.block.gallery_list' => 'getSonata_Media_Block_GalleryListService',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.group.template_registry' => 'getSonata_User_Admin_Group_TemplateRegistryService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.admin.user.template_registry' => 'getSonata_User_Admin_User_TemplateRegistryService',
            'sonata.user.form.roles_matrix_type' => 'getSonata_User_Form_RolesMatrixTypeService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService',
            'templating' => 'getTemplatingService',
            'templating.loader' => 'getTemplating_LoaderService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'sonata.user.group_manager' => 'fos_user.group_manager',
            'sonata.user.user_manager' => 'fos_user.user_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Action\DashboardAction' shared service.
     *
     * @return \Sonata\AdminBundle\Action\DashboardAction
     */
    protected function getDashboardActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/DashboardAction.php';

        return $this->services['Sonata\\AdminBundle\\Action\\DashboardAction'] = new \Sonata\AdminBundle\Action\DashboardAction($this->parameters['sonata.admin.configuration.dashboard_blocks'], ($this->services['sonata.admin.breadcrumbs_builder'] ?? $this->getSonata_Admin_BreadcrumbsBuilderService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Action\SearchAction' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SearchAction
     */
    protected function getSearchActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/SearchAction.php';

        return $this->services['Sonata\\AdminBundle\\Action\\SearchAction'] = new \Sonata\AdminBundle\Action\SearchAction(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.search.handler'] ?? $this->getSonata_Admin_Search_HandlerService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['sonata.admin.breadcrumbs_builder'] ?? $this->getSonata_Admin_BreadcrumbsBuilderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\CreateClassCacheCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\CreateClassCacheCommand
     *
     * @deprecated The "Sonata\AdminBundle\Command\CreateClassCacheCommand" service is deprecated since version sonata-project/admin-bundle 3.39.0 and will be removed in 4.0.
     */
    protected function getCreateClassCacheCommandService()
    {
        @trigger_error('The "Sonata\\AdminBundle\\Command\\CreateClassCacheCommand" service is deprecated since version sonata-project/admin-bundle 3.39.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        $this->services['Sonata\\AdminBundle\\Command\\CreateClassCacheCommand'] = $instance = new \Sonata\AdminBundle\Command\CreateClassCacheCommand($this->targetDir.'', true);

        $instance->setName('cache:create-cache-class');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\ExplainAdminCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\ExplainAdminCommand
     */
    protected function getExplainAdminCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Command/ExplainAdminCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\ExplainAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\ExplainAdminCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['validator'] ?? $this->getValidatorService()));

        $instance->setName('sonata:admin:explain');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\GenerateObjectAclCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\GenerateObjectAclCommand
     */
    protected function getGenerateObjectAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Command/QuestionableCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Command/GenerateObjectAclCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand'] = $instance = new \Sonata\AdminBundle\Command\GenerateObjectAclCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), [], ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('sonata:admin:generate-object-acl');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\ListAdminCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\ListAdminCommand
     */
    protected function getListAdminCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Command/ListAdminCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\ListAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\ListAdminCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));

        $instance->setName('sonata:admin:list');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\SetupAclCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\SetupAclCommand
     */
    protected function getSetupAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Command/SetupAclCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminAclManipulatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminAclManipulator.php';

        $this->services['Sonata\\AdminBundle\\Command\\SetupAclCommand'] = $instance = new \Sonata\AdminBundle\Command\SetupAclCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.manipulator.acl.admin'] ?? ($this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder'))));

        $instance->setName('sonata:admin:setup-acl');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\EasyExtendsBundle\Command\DumpMappingCommand' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Command\DumpMappingCommand
     */
    protected function getDumpMappingCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Command/DumpMappingCommand.php';

        return $this->services['Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand'] = new \Sonata\EasyExtendsBundle\Command\DumpMappingCommand();
    }

    /**
     * Gets the public 'Sonata\EasyExtendsBundle\Command\GenerateCommand' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Command\GenerateCommand
     */
    protected function getGenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Command/GenerateCommand.php';

        return $this->services['Sonata\\EasyExtendsBundle\\Command\\GenerateCommand'] = new \Sonata\EasyExtendsBundle\Command\GenerateCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\AddMassMediaCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\AddMassMediaCommand
     */
    protected function getAddMassMediaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/AddMassMediaCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\AddMassMediaCommand'] = new \Sonata\MediaBundle\Command\AddMassMediaCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\AddMediaCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\AddMediaCommand
     */
    protected function getAddMediaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/AddMediaCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\AddMediaCommand'] = new \Sonata\MediaBundle\Command\AddMediaCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\CleanMediaCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\CleanMediaCommand
     */
    protected function getCleanMediaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/CleanMediaCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\CleanMediaCommand'] = new \Sonata\MediaBundle\Command\CleanMediaCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\FixMediaContextCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\FixMediaContextCommand
     */
    protected function getFixMediaContextCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/FixMediaContextCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\FixMediaContextCommand'] = new \Sonata\MediaBundle\Command\FixMediaContextCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\MigrateToJsonTypeCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\MigrateToJsonTypeCommand
     */
    protected function getMigrateToJsonTypeCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/MigrateToJsonTypeCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand'] = new \Sonata\MediaBundle\Command\MigrateToJsonTypeCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\RefreshMetadataCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\RefreshMetadataCommand
     */
    protected function getRefreshMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/RefreshMetadataCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\RefreshMetadataCommand'] = new \Sonata\MediaBundle\Command\RefreshMetadataCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\RemoveThumbsCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\RemoveThumbsCommand
     */
    protected function getRemoveThumbsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/RemoveThumbsCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\RemoveThumbsCommand'] = new \Sonata\MediaBundle\Command\RemoveThumbsCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\SyncThumbsCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\SyncThumbsCommand
     */
    protected function getSyncThumbsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/SyncThumbsCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\SyncThumbsCommand'] = new \Sonata\MediaBundle\Command\SyncThumbsCommand();
    }

    /**
     * Gets the public 'Sonata\MediaBundle\Command\UpdateCdnStatusCommand' shared service.
     *
     * @return \Sonata\MediaBundle\Command\UpdateCdnStatusCommand
     */
    protected function getUpdateCdnStatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Command/UpdateCdnStatusCommand.php';

        return $this->services['Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand'] = new \Sonata\MediaBundle\Command\UpdateCdnStatusCommand();
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\CheckEmailAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\CheckEmailAction
     */
    protected function getCheckEmailActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/CheckEmailAction.php';

        return $this->services['Sonata\\UserBundle\\Action\\CheckEmailAction'] = new \Sonata\UserBundle\Action\CheckEmailAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), 7200);
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\CheckLoginAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\CheckLoginAction
     */
    protected function getCheckLoginActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/CheckLoginAction.php';

        return $this->services['Sonata\\UserBundle\\Action\\CheckLoginAction'] = new \Sonata\UserBundle\Action\CheckLoginAction();
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\LoginAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\LoginAction
     */
    protected function getLoginActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/LoginAction.php';

        $this->services['Sonata\\UserBundle\\Action\\LoginAction'] = $instance = new \Sonata\UserBundle\Action\LoginAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['session'] ?? $this->getSessionService()));

        if ($this->has('security.csrf.token_manager')) {
            $instance->setCsrfTokenManager(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
        }

        return $instance;
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\LogoutAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\LogoutAction
     */
    protected function getLogoutActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/LogoutAction.php';

        return $this->services['Sonata\\UserBundle\\Action\\LogoutAction'] = new \Sonata\UserBundle\Action\LogoutAction();
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\RequestAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\RequestAction
     */
    protected function getRequestActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/RequestAction.php';

        return $this->services['Sonata\\UserBundle\\Action\\RequestAction'] = new \Sonata\UserBundle\Action\RequestAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\ResetAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\ResetAction
     */
    protected function getResetActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/ResetAction.php';

        $this->services['Sonata\\UserBundle\\Action\\ResetAction'] = $instance = new \Sonata\UserBundle\Action\ResetAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->privates['fos_user.resetting.form.factory'] ?? $this->getFosUser_Resetting_Form_FactoryService()), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->privates['fos_user.security.login_manager'] ?? $this->getFosUser_Security_LoginManagerService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['session'] ?? $this->getSessionService()), 7200, 'main');

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'Sonata\UserBundle\Action\SendEmailAction' shared service.
     *
     * @return \Sonata\UserBundle\Action\SendEmailAction
     */
    protected function getSendEmailActionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/SendEmailAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/NoopMailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGenerator.php';

        return $this->services['Sonata\\UserBundle\\Action\\SendEmailAction'] = new \Sonata\UserBundle\Action\SendEmailAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['mailer'] ?? ($this->services['mailer'] = new \FOS\UserBundle\Mailer\NoopMailer())), ($this->privates['fos_user.util.token_generator.default'] ?? ($this->privates['fos_user.util.token_generator.default'] = new \FOS\UserBundle\Util\TokenGenerator())), 7200);
    }

    /**
     * Gets the public 'Sonata\UserBundle\Command\TwoStepVerificationCommand' shared service.
     *
     * @return \Sonata\UserBundle\Command\TwoStepVerificationCommand
     */
    protected function getTwoStepVerificationCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Command/TwoStepVerificationCommand.php';

        return $this->services['Sonata\\UserBundle\\Command\\TwoStepVerificationCommand'] = new \Sonata\UserBundle\Command\TwoStepVerificationCommand(NULL, NULL, ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['templating'] ?? $this->getTemplatingService()));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('f4810VIy1m', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ArrayTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('xlXRQiNRW6', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->getTemplating_CacheWarmer_TemplatePathsService());
            yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 2 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 3 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 5 => ($this->privates['twig.cache_warmer'] ?? $this->getTwig_CacheWarmerService());
            yield 6 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 7 => ($this->services['sonata.admin.route.cache_warmup'] ?? $this->getSonata_Admin_Route_CacheWarmupService());
            yield 8 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 9), true, ($this->targetDir.''.'/srcApp_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command.public_alias.Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand' shared service.
     *
     * @return \Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand
     */
    protected function getSonataDumpDoctrineMetaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Command/SonataDumpDoctrineMetaCommand.php';

        return $this->services['console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand'] = new \Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand();
    }

    /**
     * Gets the public 'console.command.public_alias.Sonata\CoreBundle\Command\SonataListFormMappingCommand' shared service.
     *
     * @return \Sonata\CoreBundle\Command\SonataListFormMappingCommand
     */
    protected function getSonataListFormMappingCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Command/SonataListFormMappingCommand.php';

        return $this->services['console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand'] = new \Sonata\CoreBundle\Command\SonataListFormMappingCommand();
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => ['services', 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand', 'getCreateClassCacheCommandService', false],
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => ['services', 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand', 'getExplainAdminCommandService', false],
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => ['services', 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand', 'getGenerateObjectAclCommandService', false],
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => ['services', 'Sonata\\AdminBundle\\Command\\ListAdminCommand', 'getListAdminCommandService', false],
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => ['services', 'Sonata\\AdminBundle\\Command\\SetupAclCommand', 'getSetupAclCommandService', false],
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => ['privates', 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'getDebugBlocksCommandService', false],
            'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand' => ['privates', 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand', 'getInitAclCommandService', false],
            'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand' => ['privates', 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand', 'getSetAclCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'fos_user.command.activate_user' => ['privates', 'fos_user.command.activate_user', 'getFosUser_Command_ActivateUserService', false],
            'fos_user.command.change_password' => ['privates', 'fos_user.command.change_password', 'getFosUser_Command_ChangePasswordService', false],
            'fos_user.command.create_user' => ['privates', 'fos_user.command.create_user', 'getFosUser_Command_CreateUserService', false],
            'fos_user.command.deactivate_user' => ['privates', 'fos_user.command.deactivate_user', 'getFosUser_Command_DeactivateUserService', false],
            'fos_user.command.demote_user' => ['privates', 'fos_user.command.demote_user', 'getFosUser_Command_DemoteUserService', false],
            'fos_user.command.promote_user' => ['privates', 'fos_user.command.promote_user', 'getFosUser_Command_PromoteUserService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand' => 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand',
            'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand' => 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'fos_user.command.activate_user' => 'FOS\\UserBundle\\Command\\ActivateUserCommand',
            'fos_user.command.change_password' => 'FOS\\UserBundle\\Command\\ChangePasswordCommand',
            'fos_user.command.create_user' => 'FOS\\UserBundle\\Command\\CreateUserCommand',
            'fos_user.command.deactivate_user' => 'FOS\\UserBundle\\Command\\DeactivateUserCommand',
            'fos_user.command.demote_user' => 'FOS\\UserBundle\\Command\\DemoteUserCommand',
            'fos_user.command.promote_user' => 'FOS\\UserBundle\\Command\\PromoteUserCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'security:encode-password' => 'security.command.user_password_encoder', 'sonata:block:debug' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'cache:create-cache-class' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand', 'sonata:admin:explain' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand', 'sonata:admin:generate-object-acl' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand', 'sonata:admin:list' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand', 'sonata:admin:setup-acl' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'fos:user:activate' => 'fos_user.command.activate_user', 'fos:user:change-password' => 'fos_user.command.change_password', 'fos:user:create' => 'fos_user.command.create_user', 'fos:user:deactivate' => 'fos_user.command.deactivate_user', 'fos:user:demote' => 'fos_user.command.demote_user', 'fos:user:promote' => 'fos_user.command.promote_user', 'acl:init' => 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand', 'acl:set' => 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';

        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Mapper/DoctrineORMMapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/UserListener.php';

        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $a->setSQLLogger($b);
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'security.acl.dbal.schema_listener' => ['privates', 'security.acl.dbal.schema_listener', 'getSecurity_Acl_Dbal_SchemaListenerService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'security.acl.dbal.schema_listener' => '?',
        ]));

        $d = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper(($this->services['doctrine'] ?? $this->getDoctrineService()), []);
        $d->addAssociation('App\\Entity\\User', 'mapManyToMany', [0 => ['fieldName' => 'groups', 'targetEntity' => 'App\\Entity\\Group', 'cascade' => [], 'joinTable' => ['name' => 'fos_user_user_group', 'joinColumns' => [0 => ['name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE']], 'inverseJoinColumns' => [0 => ['name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE']]]]]);

        $c->addEventSubscriber($d);
        $c->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService())));
        $c->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');
        $c->addEventListener([0 => 'postGenerateSchema'], 'security.acl.dbal.schema_listener');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], $a, $c, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ArrayTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/config/doctrine') => 'Sonata\\UserBundle\\Entity', (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/config/doctrine') => 'Sonata\\MediaBundle\\Entity']);
        $c->setGlobalBasename('mapping');

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');
        $b->addDriver($c, 'Sonata\\UserBundle\\Entity');
        $b->addDriver($c, 'Sonata\\MediaBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'SonataMediaBundle' => 'Sonata\\MediaBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\CustomerRepository' => ['privates', 'App\\Repository\\CustomerRepository', 'getCustomerRepositoryService', false],
            'App\\Repository\\GroupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', false],
            'App\\Repository\\PictureRepository' => ['privates', 'App\\Repository\\PictureRepository', 'getPictureRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\CustomerRepository' => '?',
            'App\\Repository\\GroupRepository' => '?',
            'App\\Repository\\PictureRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/ErrorRenderer/TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetRequest'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ChangePasswordController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', $this->parameters['fos_user.change_password.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.group.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\GroupController
     */
    protected function getFosUser_Group_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/GroupController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.group.controller'] = $instance = new \FOS\UserBundle\Controller\GroupController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_group_form', 'FOS\\UserBundle\\Form\\Type\\GroupFormType', $this->parameters['fos_user.group.form.validation_groups']), ($this->services['fos_user.group_manager'] ?? $this->getFosUser_GroupManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.group_manager' shared service.
     *
     * @return \Sonata\UserBundle\Entity\GroupManager
     */
    protected function getFosUser_GroupManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/GroupManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/GroupManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/GroupManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Pager/PageableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Model/GroupManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Entity/GroupManager.php';

        return $this->services['fos_user.group_manager'] = new \Sonata\UserBundle\Entity\GroupManager(($this->privates['fos_user.object_manager'] ?? $this->getFosUser_ObjectManagerService()), 'App\\Entity\\Group');
    }

    /**
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ProfileController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', $this->parameters['fos_user.profile.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/RegistrationController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/ResettingController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/TokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/NoopMailer.php';

        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['fos_user.resetting.form.factory'] ?? $this->getFosUser_Resetting_Form_FactoryService()), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->privates['fos_user.util.token_generator.default'] ?? ($this->privates['fos_user.util.token_generator.default'] = new \FOS\UserBundle\Util\TokenGenerator())), ($this->services['mailer'] ?? ($this->services['mailer'] = new \FOS\UserBundle\Mailer\NoopMailer())), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Controller/SecurityController.php';

        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \Sonata\UserBundle\Entity\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/UserManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Model/UserManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Doctrine/UserManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Pager/PageableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Model/UserManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Entity/UserManager.php';

        return $this->services['fos_user.user_manager'] = new \Sonata\UserBundle\Entity\UserManager(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()), ($this->privates['fos_user.object_manager'] ?? $this->getFosUser_ObjectManagerService()), 'App\\Entity\\User');
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/LazyLoadingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/LazyHandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/CompilableExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/ExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/ExpressionEvaluator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/jms_serializer')));
        $b = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', false],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', false],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', false],
            'jms_serializer.form_error_handler' => ['privates', 'jms_serializer.form_error_handler', 'getJmsSerializer_FormErrorHandlerService', false],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', false],
            'sonata.media.serializer.handler.gallery' => ['privates', 'sonata.media.serializer.handler.gallery', 'getSonata_Media_Serializer_Handler_GalleryService', false],
            'sonata.media.serializer.handler.media' => ['privates', 'sonata.media.serializer.handler.media', 'getSonata_Media_Serializer_Handler_MediaService', false],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.form_error_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
            'sonata.media.serializer.handler.gallery' => '?',
            'sonata.media.serializer.handler.media' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'sonata_media_media_id' => ['json' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId']], 'sonata_media_gallery_id' => ['json' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']], 'sonata_media_media_id' => ['json' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId']], 'sonata_media_gallery_id' => ['json' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId']]]]);
        $c = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $c->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        $d = new \JMS\Serializer\Expression\ExpressionEvaluator($c, ['container' => $this]);

        $e = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($d);
        $f = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', false],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
        ]));
        $f->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'ProxyManager\\Proxy\\LazyLoadingInterface']]]);
        $g = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $g->setOptions(1216);
        $h = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $h->setFormatOutput(true);
        $i = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $i->setOptions(0);

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), $e, $f, $d), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $e, $f, $d)], ['json' => $g, 'xml' => $h], ['json' => $i, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';

        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/AbstractDoctrineTypeDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/DoctrineTypeDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/YamlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Naming/PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Naming/SerializedNameAnnotationStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Naming/CamelCaseNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Metadata/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        $a = new \Metadata\Driver\FileLocator(['Sonata\\DatagridBundle' => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/config/serializer'), 'Sonata\\BlockBundle' => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/config/serializer'), 'Sonata\\UserBundle' => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/config/serializer'), 'Sonata\\MediaBundle' => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/config/serializer')]);
        $b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true));
        $c = ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c), 2 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $b, $c)]), ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';

        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), 'null');
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';

        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    protected function getJmsSerializer_TwigExtension_SerializerRuntimeHelperService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Twig/SerializerRuntimeHelper.php';

        return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(($this->services['jms_serializer'] ?? $this->getJmsSerializerService()));
    }

    /**
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    protected function getKnpMenu_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/MenuFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Factory/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Integration/Symfony/RoutingExtension.php';

        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($this->services['router'] ?? $this->getRouterService())), 0);

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/MatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Matcher.php';

        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->getKnpMenu_Voter_RouterService());
            yield 1 => ($this->services['sonata.admin.menu.matcher.voter.admin'] ?? $this->getSonata_Admin_Menu_Matcher_Voter_AdminService());
            yield 2 => ($this->services['sonata.admin.menu.matcher.voter.active'] ?? ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter()));
        }, 3));
    }

    /**
     * Gets the public 'mailer' shared service.
     *
     * @return \FOS\UserBundle\Mailer\NoopMailer
     */
    protected function getMailerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Mailer/NoopMailer.php';

        return $this->services['mailer'] = new \FOS\UserBundle\Mailer\NoopMailer();
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/LegacyRouteLoaderContainer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($this->privates['file_locator'] ?? $this->getFileLocatorService());
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader(($this->services['sonata.admin.route_loader'] ?? $this->getSonata_Admin_RouteLoaderService()));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.acl.dbal.schema' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\Schema
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/AbstractAsset.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Schema.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Dbal/Schema.php';

        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(['class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'], ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
    }

    /**
     * Gets the public 'security.acl.provider' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\MutableAclProvider
     */
    protected function getSecurity_Acl_ProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/AclProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Dbal/AclProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/MutableAclProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Dbal/MutableAclProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/PermissionGrantingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Domain/PermissionGrantingStrategy.php';

        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), ['class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'], NULL);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';

        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($this->privates['cache.annotations'])) + (int) (false) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /**
     * Gets the public 'sonata.admin.action.append_form_field_element' shared service.
     *
     * @return \Sonata\AdminBundle\Action\AppendFormFieldElementAction
     */
    protected function getSonata_Admin_Action_AppendFormFieldElementService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/AppendFormFieldElementAction.php';

        return $this->services['sonata.admin.action.append_form_field_element'] = new \Sonata\AdminBundle\Action\AppendFormFieldElementAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()));
    }

    /**
     * Gets the public 'sonata.admin.action.get_short_object_description' shared service.
     *
     * @return \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction
     */
    protected function getSonata_Admin_Action_GetShortObjectDescriptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/GetShortObjectDescriptionAction.php';

        return $this->services['sonata.admin.action.get_short_object_description'] = new \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.action.retrieve_autocomplete_items' shared service.
     *
     * @return \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction
     */
    protected function getSonata_Admin_Action_RetrieveAutocompleteItemsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/RetrieveAutocompleteItemsAction.php';

        return $this->services['sonata.admin.action.retrieve_autocomplete_items'] = new \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.action.retrieve_form_field_element' shared service.
     *
     * @return \Sonata\AdminBundle\Action\RetrieveFormFieldElementAction
     */
    protected function getSonata_Admin_Action_RetrieveFormFieldElementService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/RetrieveFormFieldElementAction.php';

        return $this->services['sonata.admin.action.retrieve_form_field_element'] = new \Sonata\AdminBundle\Action\RetrieveFormFieldElementAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()));
    }

    /**
     * Gets the public 'sonata.admin.action.set_object_field_value' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SetObjectFieldValueAction
     */
    protected function getSonata_Admin_Action_SetObjectFieldValueService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/SetObjectFieldValueAction.php';

        return $this->services['sonata.admin.action.set_object_field_value'] = new \Sonata\AdminBundle\Action\SetObjectFieldValueAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the public 'sonata.admin.audit.manager' shared service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManager.php';

        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the public 'sonata.admin.block.admin_list' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Block/AdminListBlockService.php';

        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
    }

    /**
     * Gets the public 'sonata.admin.block.search_result' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Block/AdminSearchBlockService.php';

        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.search.handler'] ?? $this->getSonata_Admin_Search_HandlerService()));
    }

    /**
     * Gets the public 'sonata.admin.block.stats' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminStatsBlockService
     */
    protected function getSonata_Admin_Block_StatsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Block/AdminStatsBlockService.php';

        return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.breadcrumbs_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\BreadcrumbsBuilder
     */
    protected function getSonata_Admin_BreadcrumbsBuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/BreadcrumbsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/BreadcrumbsBuilder.php';

        return $this->services['sonata.admin.breadcrumbs_builder'] = new \Sonata\AdminBundle\Admin\BreadcrumbsBuilder($this->parameters['sonata.admin.configuration.breadcrumbs']);
    }

    /**
     * Gets the public 'sonata.admin.builder.filter.factory' shared service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterFactory.php';

        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, ['Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => 'sonata.admin.orm.filter.type.model_autocomplete', 'doctrine_orm_model_autocomplete' => 'sonata.admin.orm.filter.type.model_autocomplete', 'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => 'sonata.admin.orm.filter.type.class', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class']);
    }

    /**
     * Gets the public 'sonata.admin.controller.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController
     *
     * @deprecated The controller service "sonata.admin.controller.admin" is deprecated in favor of several action services since version 3.38.0 and will be removed in 4.0.
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        @trigger_error('The controller service "sonata.admin.controller.admin" is deprecated in favor of several action services since version 3.38.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()), ($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the public 'sonata.admin.doctrine_orm.form.type.choice_field_mask' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType
     */
    protected function getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ChoiceFieldMaskType.php';

        return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the public 'sonata.admin.event.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdminExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Event/AdminEventExtension.php';

        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.exporter' shared service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter
     *
     * @deprecated The service "sonata.admin.exporter" is deprecated in favor of the "sonata.exporter.exporter" service since version 3.14 and will be removed in 4.0.
     */
    protected function getSonata_Admin_ExporterService()
    {
        @trigger_error('The service "sonata.admin.exporter" is deprecated in favor of the "sonata.exporter.exporter" service since version 3.14 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension
     */
    protected function getSonata_Admin_Form_Extension_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Extension/ChoiceTypeExtension.php';

        return $this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Extension/Field/Type/FormTypeFieldExtension.php';

        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(['Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''], ['legacy_twig_text_extension' => false, 'html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true]);
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field.mopa' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Extension/Field/Type/MopaCompatibilityTypeFieldExtension.php';

        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/ChoiceType.php';

        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.date' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateType.php';

        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.daterange' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateRangeType.php';

        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeType.php';

        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime_range' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeRangeType.php';

        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.default' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DefaultType.php';

        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.number' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/NumberType.php';

        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.type.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/AdminType.php';

        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.collection' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/CollectionType.php';

        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_autocomplete' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelAutocompleteType.php';

        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelType.php';

        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_hidden' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelHiddenType.php';

        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_list' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelListType
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelListType.php';

        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelListType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_reference' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelReferenceType.php';

        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';

        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.admin.helper' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper
     */
    protected function getSonata_Admin_HelperService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminHelper.php';

        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.bc' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/BCLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.form_component' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/FormLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.native' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/NativeLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.noop' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/NoopLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.underscore' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/UnderscoreLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.manager.orm' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/ModelManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/LockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Model/ModelManager.php';

        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'sonata.admin.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminAclManipulatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminAclManipulator.php';

        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.manipulator.acl.object.orm' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/ObjectAclManipulatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/ObjectAclManipulator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Util/ObjectAclManipulator.php';

        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.active' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ActiveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Menu/Matcher/Voter/ActiveVoter.php';

        return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Menu/Matcher/Voter/AdminVoter.php';

        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.children' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter
     *
     * @deprecated The "sonata.admin.menu.matcher.voter.children" service is deprecated since 3.28 and will be removed in 4.0.
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ChildrenService()
    {
        @trigger_error('The "sonata.admin.menu.matcher.voter.children" service is deprecated since 3.28 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.menu.matcher.voter.children'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter(($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.menu_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder
     */
    protected function getSonata_Admin_MenuBuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Menu/MenuBuilder.php';

        return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.object.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminObjectAclManipulator.php';

        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/BooleanFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/CallbackFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/ChoiceFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/ClassFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/DateFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/DateRangeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/DateTimeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/DateTimeRangeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/ModelFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/ModelAutocompleteFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/NumberFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/StringFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/TimeFilter.php';

        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/Pool.php';

        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', ['legacy_twig_text_extension' => false, 'html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $instance->setTemplateRegistry(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
        $instance->setAdminServiceIds([0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group']);
        $instance->setAdminGroups(['sonata_user' => ['label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class=\'fa fa-users\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.user.admin.user', 'label' => 'users', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.user.admin.group', 'label' => 'groups', 'route' => '', 'route_params' => [], 'route_absolute' => false]]]]);
        $instance->setAdminClasses(['App\\Entity\\User' => [0 => 'sonata.user.admin.user'], 'App\\Entity\\Group' => [0 => 'sonata.user.admin.group']]);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.route.cache' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RoutesCache.php';

        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true);
    }

    /**
     * Gets the public 'sonata.admin.route.cache_warmup' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RoutesCacheWarmUp.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RoutesCache.php';

        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp(($this->services['sonata.admin.route.cache'] ?? ($this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true))), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.route.default_generator' shared service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RouteGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/DefaultRouteGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RoutesCache.php';

        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator(($this->services['router'] ?? $this->getRouterService()), ($this->services['sonata.admin.route.cache'] ?? ($this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true))));
    }

    /**
     * Gets the public 'sonata.admin.route.path_info' shared service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/RouteBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/PathInfoBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManager.php';

        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
    }

    /**
     * Gets the public 'sonata.admin.route.query_string' shared service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/RouteBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/QueryStringBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManager.php';

        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
    }

    /**
     * Gets the public 'sonata.admin.route_loader' shared service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/AdminPoolLoader.php';

        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), [0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group'], $this);
    }

    /**
     * Gets the public 'sonata.admin.search.handler' shared service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Search/SearchHandler.php';

        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), true);
    }

    /**
     * Gets the public 'sonata.admin.sidebar_menu' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getSonata_Admin_SidebarMenuService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/ItemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/MenuItem.php';

        return $this->services['sonata.admin.sidebar_menu'] = ($this->services['sonata.admin.menu_builder'] ?? $this->getSonata_Admin_MenuBuilderService())->createSidebarMenu();
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php';

        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['translator'] ?? $this->getTranslatorService()), $this, ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/GlobalVariables.php';

        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), 'data:image/png;base64,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');
    }

    /**
     * Gets the public 'sonata.admin.validator.inline' shared service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Validator/InlineValidator.php';

        return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockContextManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockContextManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Loader/ServiceLoader.php';

        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => new \Sonata\BlockBundle\Block\Loader\ServiceLoader($this->parameters['sonata_blocks.block_types'])]), ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'sonata.block.exception.filter.debug_only' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/DebugOnlyFilter.php';

        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the public 'sonata.block.exception.filter.ignore_block_exception' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/IgnoreClassFilter.php';

        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_all' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/KeepAllFilter.php';

        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_none' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/KeepNoneFilter.php';

        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineRenderer.php';

        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), '@SonataBlock/Block/block_exception.html.twig');
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline_debug' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineDebugRenderer.php';

        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer(($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), '@SonataBlock/Block/block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.throw' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/MonkeyThrowRenderer.php';

        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManager.php';

        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', []);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', []);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', []);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);
        $instance->add('sonata.media.block.media', 'sonata.media.block.media', []);
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media', []);
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery', []);
        $instance->add('sonata.media.block.gallery_list', 'sonata.media.block.gallery_list', []);

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.menu.registry' shared service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry
     */
    protected function getSonata_Block_Menu_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistry.php';

        $this->services['sonata.block.menu.registry'] = $instance = new \Sonata\BlockBundle\Menu\MenuRegistry([]);

        $instance->add('sonata_admin_sidebar');

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManager.php';

        $a = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);
        $a->setDefaultFilter('debug_only');
        $a->setDefaultRenderer('throw');

        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $a, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the public 'sonata.block.service.container' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/ContainerBlockService.php';

        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.empty' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EmptyBlockService.php';

        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.menu' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService
     */
    protected function getSonata_Block_Service_MenuService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/MenuBlockService.php';

        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), ($this->services['sonata.block.menu.registry'] ?? $this->getSonata_Block_Menu_RegistryService()));
    }

    /**
     * Gets the public 'sonata.block.service.rss' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService
     */
    protected function getSonata_Block_Service_RssService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/RssBlockService.php';

        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.template' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/TemplateBlockService.php';

        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.text' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService
     */
    protected function getSonata_Block_Service_TextService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/TextBlockService.php';

        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.core.flashmessage.manager' shared service.
     *
     * @return \Sonata\Twig\FlashMessage\FlashManager
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Status/StatusClassRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/FlashMessage/FlashManager.php';

        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\Twig\FlashMessage\FlashManager(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()), ['success' => ['success' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_success' => ['domain' => 'SonataAdminBundle'], 'sonata_user_success' => ['domain' => 'SonataUserBundle'], 'fos_user_success' => ['domain' => 'FOSUserBundle']], 'warning' => ['warning' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_info' => ['domain' => 'SonataAdminBundle']], 'danger' => ['error' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_error' => ['domain' => 'SonataAdminBundle'], 'sonata_user_error' => ['domain' => 'SonataUserBundle']]], ['success' => 'success', 'warning' => 'warning', 'danger' => 'danger']);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';

        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension();
    }

    /**
     * Gets the public 'sonata.core.form.type.array' shared service.
     *
     * @return \Sonata\Form\Type\ImmutableArrayType
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/ImmutableArrayType.php';

        return $this->services['sonata.core.form.type.array'] = new \Sonata\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the public 'sonata.core.form.type.array_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType
     */
    protected function getSonata_Core_Form_Type_ArrayLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/ImmutableArrayType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/ImmutableArrayType.php';

        return $this->services['sonata.core.form.type.array_legacy'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the public 'sonata.core.form.type.boolean' shared service.
     *
     * @return \Sonata\Form\Type\BooleanType
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BooleanType.php';

        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\Form\Type\BooleanType();
    }

    /**
     * Gets the public 'sonata.core.form.type.boolean_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType
     */
    protected function getSonata_Core_Form_Type_BooleanLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BooleanType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/BooleanType.php';

        return $this->services['sonata.core.form.type.boolean_legacy'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the public 'sonata.core.form.type.collection' shared service.
     *
     * @return \Sonata\Form\Type\CollectionType
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/CollectionType.php';

        return $this->services['sonata.core.form.type.collection'] = new \Sonata\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.core.form.type.collection_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType
     */
    protected function getSonata_Core_Form_Type_CollectionLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/CollectionType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/CollectionType.php';

        return $this->services['sonata.core.form.type.collection_legacy'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.core.form.type.color_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorType
     */
    protected function getSonata_Core_Form_Type_ColorLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/ColorType.php';

        return $this->services['sonata.core.form.type.color_legacy'] = new \Sonata\CoreBundle\Form\Type\ColorType();
    }

    /**
     * Gets the public 'sonata.core.form.type.color_selector' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType
     *
     * @deprecated The "sonata.core.form.type.color_selector" service is deprecated since 3.5 and will be removed in 4.0.
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        @trigger_error('The "sonata.core.form.type.color_selector" service is deprecated since 3.5 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the public 'sonata.core.form.type.date_picker' shared service.
     *
     * @return \Sonata\Form\Type\DatePickerType
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BasePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DatePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Date/MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\Form\Type\DatePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType
     */
    protected function getSonata_Core_Form_Type_DatePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BasePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DatePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DatePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Date/MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.date_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DatePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range' shared service.
     *
     * @return \Sonata\Form\Type\DateRangeType
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php';

        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\Form\Type\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType
     */
    protected function getSonata_Core_Form_Type_DateRangeLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangeType.php';

        return $this->services['sonata.core.form.type.date_range_legacy'] = new \Sonata\CoreBundle\Form\Type\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateRangePickerType
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangePickerType.php';

        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\Form\Type\DateRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType
     */
    protected function getSonata_Core_Form_Type_DateRangePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangePickerType.php';

        return $this->services['sonata.core.form.type.date_range_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateTimePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BasePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Date/MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\Form\Type\DateTimePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/BasePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Date/MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.datetime_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range' shared service.
     *
     * @return \Sonata\Form\Type\DateTimeRangeType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php';

        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\Form\Type\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangeType.php';

        return $this->services['sonata.core.form.type.datetime_range_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateTimeRangePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangePickerType.php';

        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\Form\Type\DateTimeRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangePickerType.php';

        return $this->services['sonata.core.form.type.datetime_range_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.equal' shared service.
     *
     * @return \Sonata\Form\Type\EqualType
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/EqualType.php';

        return $this->services['sonata.core.form.type.equal'] = new \Sonata\Form\Type\EqualType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.equal_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType
     */
    protected function getSonata_Core_Form_Type_EqualLegacyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/EqualType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/EqualType.php';

        return $this->services['sonata.core.form.type.equal_legacy'] = new \Sonata\CoreBundle\Form\Type\EqualType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.translatable_choice' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType
     *
     * @deprecated The "sonata.core.form.type.translatable_choice" service is deprecated since 2.2.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        @trigger_error('The "sonata.core.form.type.translatable_choice" service is deprecated since 2.2.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     *
     * @deprecated The "sonata.core.model.adapter.chain" service is deprecated in favor of service "sonata.doctrine.model.adapter.chain" since 3.12.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        @trigger_error('The "sonata.core.model.adapter.chain" service is deprecated in favor of service "sonata.doctrine.model.adapter.chain" since 3.12.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter($this->getSonata_Core_Model_Adapter_DoctrineOrmService());

        return $instance;
    }

    /**
     * Gets the public 'sonata.core.slugify.cocur' shared service.
     *
     * @return \Cocur\Slugify\Slugify
     *
     * @deprecated The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        @trigger_error('The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the public 'sonata.core.slugify.native' shared service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify
     *
     * @deprecated The "sonata.core.slugify.native" service is deprecated since 2.3 and will be removed in 4.0.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        @trigger_error('The "sonata.core.slugify.native" service is deprecated since 2.3 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the public 'sonata.easy_extends.generator.bundle' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\BundleGenerator
     */
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/BundleGenerator.php';

        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }

    /**
     * Gets the public 'sonata.easy_extends.generator.odm' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OdmGenerator
     */
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/OdmGenerator.php';

        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }

    /**
     * Gets the public 'sonata.easy_extends.generator.orm' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OrmGenerator
     */
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/OrmGenerator.php';

        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }

    /**
     * Gets the public 'sonata.easy_extends.generator.phpcr' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator
     */
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/PHPCRGenerator.php';

        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }

    /**
     * Gets the public 'sonata.easy_extends.generator.serializer' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\SerializerGenerator
     */
    protected function getSonata_EasyExtends_Generator_SerializerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/Generator/SerializerGenerator.php';

        return $this->services['sonata.easy_extends.generator.serializer'] = new \Sonata\EasyExtendsBundle\Generator\SerializerGenerator();
    }

    /**
     * Gets the public 'sonata.media.block.feature_media' shared service.
     *
     * @return \Sonata\MediaBundle\Block\FeatureMediaBlockService
     */
    protected function getSonata_Media_Block_FeatureMediaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Block/MediaBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Block/FeatureMediaBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.block.feature_media'] = new \Sonata\MediaBundle\Block\FeatureMediaBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, $this, ($this->services['sonata.media.manager.media'] ?? ($this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Model\NoDriverManager())));
    }

    /**
     * Gets the public 'sonata.media.block.gallery' shared service.
     *
     * @return \Sonata\MediaBundle\Block\GalleryBlockService
     */
    protected function getSonata_Media_Block_GalleryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Block/GalleryBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.block.gallery'] = new \Sonata\MediaBundle\Block\GalleryBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, $this, ($this->services['sonata.media.manager.gallery'] ?? ($this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Model\NoDriverManager())));
    }

    /**
     * Gets the public 'sonata.media.block.gallery_list' shared service.
     *
     * @return \Sonata\MediaBundle\Block\GalleryListBlockService
     */
    protected function getSonata_Media_Block_GalleryListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Block/GalleryListBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.block.gallery_list'] = new \Sonata\MediaBundle\Block\GalleryListBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.media.manager.gallery'] ?? ($this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Model\NoDriverManager())), ($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()));
    }

    /**
     * Gets the public 'sonata.media.block.media' shared service.
     *
     * @return \Sonata\MediaBundle\Block\MediaBlockService
     */
    protected function getSonata_Media_Block_MediaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Block/MediaBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.block.media'] = new \Sonata\MediaBundle\Block\MediaBlockService('sonata.media.block.media', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), $this, ($this->services['sonata.media.manager.media'] ?? ($this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Model\NoDriverManager())));
    }

    /**
     * Gets the public 'sonata.media.manager.gallery' shared service.
     *
     * @return \Sonata\MediaBundle\Model\NoDriverManager
     */
    protected function getSonata_Media_Manager_GalleryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Model\NoDriverManager();
    }

    /**
     * Gets the public 'sonata.media.manager.media' shared service.
     *
     * @return \Sonata\MediaBundle\Model\NoDriverManager
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Model\NoDriverManager();
    }

    /**
     * Gets the public 'sonata.media.metadata.amazon' shared service.
     *
     * @return \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder
     */
    protected function getSonata_Media_Metadata_AmazonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/AmazonMetadataBuilder.php';

        return $this->services['sonata.media.metadata.amazon'] = new \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder([]);
    }

    /**
     * Gets the public 'sonata.media.metadata.noop' shared service.
     *
     * @return \Sonata\MediaBundle\Metadata\NoopMetadataBuilder
     */
    protected function getSonata_Media_Metadata_NoopService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/NoopMetadataBuilder.php';

        return $this->services['sonata.media.metadata.noop'] = new \Sonata\MediaBundle\Metadata\NoopMetadataBuilder();
    }

    /**
     * Gets the public 'sonata.media.metadata.proxy' shared service.
     *
     * @return \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this);
    }

    /**
     * Gets the public 'sonata.media.pool' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\Pool
     */
    protected function getSonata_Media_PoolService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/Pool.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Security/DownloadStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Security/RolesDownloadStrategy.php';

        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', [0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file', 4 => 'sonata.media.provider.vimeo'], ['default_small' => ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL, 'resizer_options' => []], 'default_big' => ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => NULL, 'resizer_options' => []]], ['strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http']);
        $instance->addDownloadStrategy('sonata.media.security.superadmin_strategy', new \Sonata\MediaBundle\Security\RolesDownloadStrategy(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), [0 => 'ROLE_ADMIN', 1 => 'ROLE_SUPER_ADMIN']));
        $instance->addProvider('sonata.media.provider.image', ($this->services['sonata.media.provider.image'] ?? $this->getSonata_Media_Provider_ImageService()));
        $instance->addProvider('sonata.media.provider.file', ($this->services['sonata.media.provider.file'] ?? $this->getSonata_Media_Provider_FileService()));
        $instance->addProvider('sonata.media.provider.youtube', ($this->services['sonata.media.provider.youtube'] ?? $this->getSonata_Media_Provider_YoutubeService()));
        $instance->addProvider('sonata.media.provider.dailymotion', ($this->services['sonata.media.provider.dailymotion'] ?? $this->getSonata_Media_Provider_DailymotionService()));
        $instance->addProvider('sonata.media.provider.vimeo', ($this->services['sonata.media.provider.vimeo'] ?? $this->getSonata_Media_Provider_VimeoService()));

        return $instance;
    }

    /**
     * Gets the public 'sonata.media.provider.dailymotion' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\DailyMotionProvider
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseVideoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/DailyMotionProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/NoDriverGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? ($this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/upload/media'))), ($this->privates['sonata.media.generator.default'] ?? ($this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\NoDriverGenerator())), ($this->privates['sonata.media.thumbnail.format'] ?? $this->getSonata_Media_Thumbnail_FormatService()), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))));

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_dailymotion.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.media.provider.file' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\FileProvider
     */
    protected function getSonata_Media_Provider_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/FileProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/FileProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/NoDriverGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? ($this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/upload/media'))), ($this->privates['sonata.media.generator.default'] ?? ($this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\NoDriverGenerator())), ($this->privates['sonata.media.thumbnail.format'] ?? $this->getSonata_Media_Thumbnail_FormatService()), [0 => 'pdf', 1 => 'txt', 2 => 'rtf', 3 => 'doc', 4 => 'docx', 5 => 'xls', 6 => 'xlsx', 7 => 'ppt', 8 => 'pptx', 9 => 'odt', 10 => 'odg', 11 => 'odp', 12 => 'ods', 13 => 'odc', 14 => 'odf', 15 => 'odb', 16 => 'csv', 17 => 'xml'], [0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'], ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))));

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_file.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.media.provider.image' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\ImageProvider
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/FileProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/FileProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/ImageProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/NoDriverGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? ($this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/upload/media'))), ($this->privates['sonata.media.generator.default'] ?? ($this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\NoDriverGenerator())), ($this->privates['sonata.media.thumbnail.format'] ?? $this->getSonata_Media_Thumbnail_FormatService()), [0 => 'jpg', 1 => 'png', 2 => 'jpeg'], [0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'], ($this->privates['sonata.media.adapter.image.gd'] ?? ($this->privates['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())), ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))));

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_image.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.media.provider.vimeo' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\VimeoProvider
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseVideoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/VimeoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/NoDriverGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? ($this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/upload/media'))), ($this->privates['sonata.media.generator.default'] ?? ($this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\NoDriverGenerator())), ($this->privates['sonata.media.thumbnail.format'] ?? $this->getSonata_Media_Thumbnail_FormatService()), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))));

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_vimeo.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.media.provider.youtube' shared service.
     *
     * @return \Sonata\MediaBundle\Provider\YouTubeProvider
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/MediaProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/BaseVideoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Provider/YouTubeProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/CDNInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/CDN/Server.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Generator/NoDriverGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', ($this->privates['sonata.media.filesystem.local'] ?? $this->getSonata_Media_Filesystem_LocalService()), ($this->privates['sonata.media.cdn.server'] ?? ($this->privates['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/upload/media'))), ($this->privates['sonata.media.generator.default'] ?? ($this->privates['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\NoDriverGenerator())), ($this->privates['sonata.media.thumbnail.format'] ?? $this->getSonata_Media_Thumbnail_FormatService()), ($this->privates['sonata.media.buzz.browser'] ?? $this->getSonata_Media_Buzz_BrowserService()), ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))), false);

        $instance->setTemplates(['helper_thumbnail' => '@SonataMedia/Provider/thumbnail.html.twig', 'helper_view' => '@SonataMedia/Provider/view_youtube.html.twig']);
        $instance->addFormat('default_small', ['width' => 100, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->addFormat('default_big', ['width' => 500, 'quality' => 70, 'height' => NULL, 'format' => 'jpg', 'constraint' => true, 'resizer' => false, 'resizer_options' => []]);
        $instance->setResizer(($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addFormat('admin', $this->parameters['sonata.media.admin_format']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.user.admin.group' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\GroupAdmin
     */
    protected function getSonata_User_Admin_GroupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AccessRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/FieldDescriptionRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/LifecycleHookProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/MenuBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/ParentAdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/UrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/DomainObjectInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminTreeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Model/GroupAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/GroupAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/UnderscoreLabelTranslatorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/SecurityHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/NoopSecurityHandler.php';

        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'App\\Entity\\Group', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy(($this->services['sonata.admin.label.strategy.underscore'] ?? ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())));
        $instance->setManagerType('orm');
        $instance->setModelManager(($this->services['sonata.admin.manager.orm'] ?? $this->getSonata_Admin_Manager_OrmService()));
        $instance->setFormContractor(($this->privates['sonata.admin.builder.orm_form'] ?? $this->getSonata_Admin_Builder_OrmFormService()));
        $instance->setShowBuilder(($this->privates['sonata.admin.builder.orm_show'] ?? $this->getSonata_Admin_Builder_OrmShowService()));
        $instance->setListBuilder(($this->privates['sonata.admin.builder.orm_list'] ?? $this->getSonata_Admin_Builder_OrmListService()));
        $instance->setDatagridBuilder(($this->privates['sonata.admin.builder.orm_datagrid'] ?? $this->getSonata_Admin_Builder_OrmDatagridService()));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()), false);
        $instance->setConfigurationPool(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
        $instance->setRouteGenerator(($this->services['sonata.admin.route.default_generator'] ?? $this->getSonata_Admin_Route_DefaultGeneratorService()));
        $instance->setValidator(($this->services['validator'] ?? $this->getValidatorService()));
        $instance->setSecurityHandler(($this->privates['sonata.admin.security.handler.noop'] ?? ($this->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())));
        $instance->setMenuFactory(($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()));
        $instance->setRouteBuilder(($this->services['sonata.admin.route.path_info'] ?? $this->getSonata_Admin_Route_PathInfoService()));
        $instance->setPagerType('default');
        $instance->setLabel('groups');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(($this->services['sonata.user.admin.group.template_registry'] ?? $this->getSonata_User_Admin_Group_TemplateRegistryService()));
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(($this->services['sonata.admin.event.extension'] ?? $this->getSonata_Admin_Event_ExtensionService()));
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.user.admin.group.template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_User_Admin_Group_TemplateRegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';

        return $this->services['sonata.user.admin.group.template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.user.admin.user' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\UserAdmin
     */
    protected function getSonata_User_Admin_UserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AccessRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/FieldDescriptionRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/LifecycleHookProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/MenuBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/ParentAdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/UrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/DomainObjectInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminTreeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Model/UserAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/UserAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/UnderscoreLabelTranslatorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/SecurityHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/NoopSecurityHandler.php';

        $instance = new \Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'App\\Entity\\User', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setUserManager(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy(($this->services['sonata.admin.label.strategy.underscore'] ?? ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())));
        $instance->setManagerType('orm');
        $instance->setModelManager(($this->services['sonata.admin.manager.orm'] ?? $this->getSonata_Admin_Manager_OrmService()));
        $instance->setFormContractor(($this->privates['sonata.admin.builder.orm_form'] ?? $this->getSonata_Admin_Builder_OrmFormService()));
        $instance->setShowBuilder(($this->privates['sonata.admin.builder.orm_show'] ?? $this->getSonata_Admin_Builder_OrmShowService()));
        $instance->setListBuilder(($this->privates['sonata.admin.builder.orm_list'] ?? $this->getSonata_Admin_Builder_OrmListService()));
        $instance->setDatagridBuilder(($this->privates['sonata.admin.builder.orm_datagrid'] ?? $this->getSonata_Admin_Builder_OrmDatagridService()));
        $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()), false);
        $instance->setConfigurationPool(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
        $instance->setRouteGenerator(($this->services['sonata.admin.route.default_generator'] ?? $this->getSonata_Admin_Route_DefaultGeneratorService()));
        $instance->setValidator(($this->services['validator'] ?? $this->getValidatorService()));
        $instance->setSecurityHandler(($this->privates['sonata.admin.security.handler.noop'] ?? ($this->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())));
        $instance->setMenuFactory(($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()));
        $instance->setRouteBuilder(($this->services['sonata.admin.route.path_info'] ?? $this->getSonata_Admin_Route_PathInfoService()));
        $instance->setPagerType('default');
        $instance->setLabel('users');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(($this->services['sonata.user.admin.user.template_registry'] ?? $this->getSonata_User_Admin_User_TemplateRegistryService()));
        $instance->setSecurityInformation([]);
        $instance->initialize();
        $instance->addExtension(($this->services['sonata.admin.event.extension'] ?? $this->getSonata_Admin_Event_ExtensionService()));
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.user.admin.user.template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_User_Admin_User_TemplateRegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';

        return $this->services['sonata.user.admin.user.template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.user.form.roles_matrix_type' shared service.
     *
     * @return \Sonata\UserBundle\Form\Type\RolesMatrixType
     */
    protected function getSonata_User_Form_RolesMatrixTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Form/Type/RolesMatrixType.php';

        return $this->services['sonata.user.form.roles_matrix_type'] = new \Sonata\UserBundle\Form\Type\RolesMatrixType(($this->privates['sonata.user.matrix_roles_builder'] ?? $this->getSonata_User_MatrixRolesBuilderService()));
    }

    /**
     * Gets the public 'sonata.user.form.type.security_roles' shared service.
     *
     * @return \Sonata\UserBundle\Form\Type\SecurityRolesType
     */
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Form/Type/SecurityRolesType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/EditableRolesBuilder.php';

        $a = new \Sonata\UserBundle\Security\EditableRolesBuilder(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), $this->parameters['security.role_hierarchy.roles']);
        $a->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($a);
    }

    /**
     * Gets the public 'sonata.user.manager.user' shared service.
     *
     * @return \Sonata\UserBundle\Entity\UserManagerProxy
     */
    protected function getSonata_User_Manager_UserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/BaseManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Entity/BaseEntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Entity/UserManagerProxy.php';

        return $this->services['sonata.user.manager.user'] = new \Sonata\UserBundle\Entity\UserManagerProxy('App\\Entity\\User', ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     *
     * @deprecated The "templating" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTemplatingService()
    {
        @trigger_error('The "templating" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     *
     * @deprecated The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LoaderService()
    {
        @trigger_error('The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ar.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.bg.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.bg.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.bg.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.bg.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ca.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ca.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ca.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ca.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.cs.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.cs.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.cs.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.cs.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.de.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.de.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.de.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.de.xliff'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataAdminBundle.de.xlf'), 11 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.de.xliff'), 12 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataAdminBundle.de.xlf'), 13 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.en.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.en.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.en.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.en.xliff'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataAdminBundle.en.xlf'), 11 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.en.xliff'), 12 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataAdminBundle.en.xlf'), 13 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.es.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.es.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.es.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.es.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.eu.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.eu.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.eu.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fa.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fa.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fa.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fa.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fi.xliff'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fi.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fi.xliff')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.fr.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fr.xliff'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fr.xliff'), 11 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.hr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hr.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hr.xliff')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hu.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.hu.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hu.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hu.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.it.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.it.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.it.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.it.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ja.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ja.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ja.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ja.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lb.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.lb.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lb.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lt.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.lt.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lt.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.lt.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lv.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.nl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.nl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.nl.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.nl.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pl.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pl.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt.xliff'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pt.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt.xliff')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt_BR.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt_BR.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ro.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ro.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ro.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ro.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ru.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ru.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ru.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/FOSUserBundle.ru.xliff'), 10 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ru.xliff'), 11 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sk.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.sk.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sk.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.sl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sl.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sl.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.sl.xliff')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.tr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.uk.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.uk.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.uk.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.uk.xliff'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations/SonataMediaBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.zh_CN.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.zh_TW.xliff')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'sv_SE' => [0 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_HK.xliff')], 'bn' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')], 'bn_BD' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')], 'eo' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')], 'ky' => [0 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations'), 8 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/translations'), 10 => (\dirname(__DIR__, 4).'/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/TwigExtraBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).'/src/Resources/SonataDatagridBundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/SonataCoreBundle/translations'), 21 => (\dirname(__DIR__, 4).'/src/Resources/SonataBlockBundle/translations'), 22 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/translations'), 23 => (\dirname(__DIR__, 4).'/src/Resources/KnpMenuBundle/translations'), 24 => (\dirname(__DIR__, 4).'/src/Resources/SonataAdminBundle/translations'), 25 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 26 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 27 => (\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/translations'), 28 => (\dirname(__DIR__, 4).'/src/Resources/SonataDoctrineORMAdminBundle/translations'), 29 => (\dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src/translations'), 30 => (\dirname(__DIR__, 4).'/src/Resources/SonataEasyExtendsBundle/translations'), 31 => (\dirname(__DIR__, 4).'/src/Resources/FOSUserBundle/translations'), 32 => (\dirname(__DIR__, 4).'/src/Resources/SonataUserBundle/translations'), 33 => (\dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src/translations'), 34 => (\dirname(__DIR__, 4).'/src/Resources/AclBundle/translations'), 35 => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/translations'), 36 => (\dirname(__DIR__, 4).'/src/Resources/JMSSerializerBundle/translations'), 37 => (\dirname(__DIR__, 4).'/src/Resources/SonataMediaBundle/translations'), 38 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/sonata-project/datagrid-bundle/src/Resources/translations', 4 => 'vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations', 5 => 'vendor/sonata-project/block-bundle/src/Resources/translations', 6 => 'vendor/sonata-project/admin-bundle/src/Resources/translations', 7 => 'vendor/friendsofsymfony/user-bundle/Resources/translations', 8 => 'vendor/sonata-project/user-bundle/src/Resources/translations', 9 => 'vendor/sonata-project/media-bundle/src/Resources/translations', 10 => 'translations', 11 => 'vendor/symfony/framework-bundle/translations', 12 => 'src/Resources/FrameworkBundle/translations', 13 => 'vendor/symfony/twig-bundle/translations', 14 => 'src/Resources/TwigBundle/translations', 15 => 'vendor/twig/extra-bundle/src/translations', 16 => 'src/Resources/TwigExtraBundle/translations', 17 => 'vendor/symfony/security-bundle/translations', 18 => 'src/Resources/SecurityBundle/translations', 19 => 'src/Resources/SonataDatagridBundle/translations', 20 => 'src/Resources/SonataCoreBundle/translations', 21 => 'src/Resources/SonataBlockBundle/translations', 22 => 'vendor/knplabs/knp-menu-bundle/src/translations', 23 => 'src/Resources/KnpMenuBundle/translations', 24 => 'src/Resources/SonataAdminBundle/translations', 25 => 'vendor/doctrine/doctrine-bundle/translations', 26 => 'src/Resources/DoctrineBundle/translations', 27 => 'vendor/sonata-project/doctrine-orm-admin-bundle/src/translations', 28 => 'src/Resources/SonataDoctrineORMAdminBundle/translations', 29 => 'vendor/sonata-project/easy-extends-bundle/src/translations', 30 => 'src/Resources/SonataEasyExtendsBundle/translations', 31 => 'src/Resources/FOSUserBundle/translations', 32 => 'src/Resources/SonataUserBundle/translations', 33 => 'vendor/symfony/acl-bundle/src/translations', 34 => 'src/Resources/AclBundle/translations', 35 => 'vendor/jms/serializer-bundle/translations', 36 => 'src/Resources/JMSSerializerBundle/translations', 37 => 'src/Resources/SonataMediaBundle/translations', 38 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'bg', 1 => 'en']);

        return $instance;
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/string-extra/src/StringExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/GlobalsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FormTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Twig/Extension/DeprecatedTextExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Twig/Extension/StatusExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTemplateExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Twig/Extension/BlockExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/HelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/Helper.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Templating/Helper/BlockHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/TemplateRegistryExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/StringExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Twig/RolesMatrixExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Twig/SerializerRuntimeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/InitRuntimeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Twig/Extension/MediaExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Twig/GlobalVariables.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Twig/GlobalVariables.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Twig/GlobalVariables.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), 'SonataDatagrid');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), '!SonataDatagrid');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views'), 'SonataCore');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views'), '!SonataCore');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/views'), 'SonataBlock');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/views'), '!SonataBlock');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/views'), 'SonataAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/views'), '!SonataAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), 'SonataDoctrineORMAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), '!SonataDoctrineORMAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/views'), 'SonataUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Resources/views'), '!SonataUser');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/views'), 'SonataMedia');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/views'), '!SonataMedia');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Knp\Menu\Util\MenuManipulator();
        $e = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }
        $g = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Twig\Extra\String\StringExtension());
        $instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? ($this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension())));
        $instance->addExtension(new \Sonata\Twig\Extension\FormTypeExtension('standard'));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\StatusExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\DeprecatedTemplateExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\TemplateExtension(true, $b, ($this->services['sonata.core.model.adapter.chain'] ?? $this->getSonata_Core_Model_Adapter_ChainService())));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->getSonata_Block_Renderer_DefaultService()), ($this->services['sonata.block.context_manager.default'] ?? $this->getSonata_Block_ContextManager_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())), NULL)));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService', false],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService', false],
        ], [
            'list' => '?',
            'twig' => '?',
        ]), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), $d, $e), $e, $d));
        $instance->addExtension(($this->services['sonata.admin.twig.extension'] ?? $this->getSonata_Admin_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), $this));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\StringExtension(NULL));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Sonata\UserBundle\Twig\RolesMatrixExtension(($this->privates['sonata.user.matrix_roles_builder'] ?? $this->getSonata_User_MatrixRolesBuilderService())));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Sonata\MediaBundle\Twig\Extension\MediaExtension(($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()), ($this->services['sonata.media.manager.media'] ?? ($this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Model\NoDriverManager()))));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService', false],
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => ['privates', 'sonata.core.flashmessage.twig.runtime', 'getSonata_Core_Flashmessage_Twig_RuntimeService', false],
            'Sonata\\Twig\\Extension\\StatusRuntime' => ['privates', 'sonata.core.twig.status_runtime', 'getSonata_Core_Twig_StatusRuntimeService', false],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => '?',
            'Sonata\\Twig\\Extension\\StatusRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->registerUndefinedFilterCallback([0 => $g, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $g, 1 => 'suggestFunction']);
        $instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']));
        $instance->addGlobal('sonata_admin', ($this->services['sonata.admin.twig.global'] ?? $this->getSonata_Admin_Twig_GlobalService()));
        $instance->addGlobal('sonata_user', new \Sonata\UserBundle\Twig\GlobalVariables($this));
        $instance->addGlobal('sonata_media', new \Sonata\MediaBundle\Twig\GlobalVariables($this));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';

        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.o9nGMXB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_O9nGMXBService()
    {
        return $this->privates['.service_locator.o9nGMXB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]);
    }

    /**
     * Gets the private 'App\Repository\CustomerRepository' shared autowired service.
     *
     * @return \App\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CustomerRepository.php';

        return $this->privates['App\\Repository\\CustomerRepository'] = new \App\Repository\CustomerRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\GroupRepository' shared autowired service.
     *
     * @return \App\Repository\GroupRepository
     */
    protected function getGroupRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/GroupRepository.php';

        return $this->privates['App\\Repository\\GroupRepository'] = new \App\Repository\GroupRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PictureRepository' shared autowired service.
     *
     * @return \App\Repository\PictureRepository
     */
    protected function getPictureRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/PictureRepository.php';

        return $this->privates['App\\Repository\\PictureRepository'] = new \App\Repository\PictureRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';

        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Security\LoginFormAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginFormAuthenticator
     */
    protected function getLoginFormAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/LoginFormAuthenticator.php';

        return $this->privates['App\\Security\\LoginFormAuthenticator'] = new \App\Security\LoginFormAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'Sonata\BlockBundle\Command\DebugBlocksCommand' shared service.
     *
     * @return \Sonata\BlockBundle\Command\DebugBlocksCommand
     */
    protected function getDebugBlocksCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Command/DebugBlocksCommand.php';

        $this->privates['Sonata\\BlockBundle\\Command\\DebugBlocksCommand'] = $instance = new \Sonata\BlockBundle\Command\DebugBlocksCommand(NULL, ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()));

        $instance->setName('sonata:block:debug');

        return $instance;
    }

    /**
     * Gets the private 'Symfony\Bundle\AclBundle\Command\InitAclCommand' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\Command\InitAclCommand
     */
    protected function getInitAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src/Command/InitAclCommand.php';

        $this->privates['Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\InitAclCommand(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['security.acl.dbal.schema'] ?? $this->getSecurity_Acl_Dbal_SchemaService()));

        $instance->setName('acl:init');

        return $instance;
    }

    /**
     * Gets the private 'Symfony\Bundle\AclBundle\Command\SetAclCommand' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\Command\SetAclCommand
     */
    protected function getSetAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src/Command/SetAclCommand.php';

        $this->privates['Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\SetAclCommand(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()));

        $instance->setName('acl:set');

        return $instance;
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';

        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';

        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []));
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nWhU4PUG2V', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('C0Bb1C9BZ1', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.security_expression_language', 7 => 'cache.doctrine.orm.default.metadata', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
        }, 1));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Sonata\\CoreBundle\\Form\\Type', 2 => 'Sonata\\Form\\Type', 3 => 'Sonata\\BlockBundle\\Form\\Type', 4 => 'Sonata\\AdminBundle\\Form\\Type', 5 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 6 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 7 => 'FOS\\UserBundle\\Form\\Type', 8 => 'Sonata\\UserBundle\\Form\\Type', 9 => 'Sonata\\MediaBundle\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 4 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 5 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 6 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 7 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 8 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 9 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 10 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 11 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 12 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 13 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 14 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 15 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 16 => 'Sonata\\Form\\Type\\ImmutableArrayType', 17 => 'Sonata\\Form\\Type\\BooleanType', 18 => 'Sonata\\Form\\Type\\CollectionType', 19 => 'Sonata\\Form\\Type\\DateRangeType', 20 => 'Sonata\\Form\\Type\\DateTimeRangeType', 21 => 'Sonata\\Form\\Type\\DatePickerType', 22 => 'Sonata\\Form\\Type\\DateTimePickerType', 23 => 'Sonata\\Form\\Type\\DateRangePickerType', 24 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 25 => 'Sonata\\Form\\Type\\EqualType', 26 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 27 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 28 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 29 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 30 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 34 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 35 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 36 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 37 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 38 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 39 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 40 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 41 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 42 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 43 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 44 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 45 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 46 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 47 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 48 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 49 => 'FOS\\UserBundle\\Form\\Type\\GroupFormType', 50 => 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType', 51 => 'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType', 52 => 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType', 53 => 'Sonata\\MediaBundle\\Form\\Type\\MediaType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/FlashMessage/FlashManager.php'), 14 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/TranslatableChoiceType.php'), 15 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangeType.php'), 16 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangeType.php'), 17 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DatePickerType.php'), 18 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimePickerType.php'), 19 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangePickerType.php'), 20 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangePickerType.php'), 21 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/EqualType.php'), 22 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php'), 23 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php'), 24 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DatePickerType.php'), 25 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimePickerType.php'), 26 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangePickerType.php'), 27 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangePickerType.php'), 28 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/EqualType.php'), 29 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php'), 30 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/NumberType.php'), 31 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/ChoiceType.php'), 32 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateType.php'), 33 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateRangeType.php'), 34 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeType.php'), 35 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeRangeType.php'), 36 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php'), 37 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/EditableRolesBuilder.php'), 38 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilder.php'), 39 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/SecurityRolesBuilder.php'), 40 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/UserAdmin.php'), 41 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/GroupAdmin.php'), 42 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/ResetAction.php'), 43 => (\dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/FormErrorHandler.php'), 44 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Security/RolesDownloadStrategy.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/FlashMessage/FlashManager.php'), 14 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/TranslatableChoiceType.php'), 15 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangeType.php'), 16 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangeType.php'), 17 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DatePickerType.php'), 18 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimePickerType.php'), 19 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateRangePickerType.php'), 20 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/DateTimeRangePickerType.php'), 21 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Form/Type/EqualType.php'), 22 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangeType.php'), 23 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangeType.php'), 24 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DatePickerType.php'), 25 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimePickerType.php'), 26 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateRangePickerType.php'), 27 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/DateTimeRangePickerType.php'), 28 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Type/EqualType.php'), 29 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php'), 30 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/NumberType.php'), 31 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/ChoiceType.php'), 32 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateType.php'), 33 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateRangeType.php'), 34 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeType.php'), 35 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/Filter/DateTimeRangeType.php'), 36 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php'), 37 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/EditableRolesBuilder.php'), 38 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilder.php'), 39 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/SecurityRolesBuilder.php'), 40 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/UserAdmin.php'), 41 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Admin/Entity/GroupAdmin.php'), 42 => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/ResetAction.php'), 43 => (\dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/FormErrorHandler.php'), 44 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Security/RolesDownloadStrategy.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';

        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.acl.voter.user_permissions'] ?? $this->getDebug_Security_Voter_Security_Acl_Voter_UserPermissionsService());
            yield 1 => ($this->privates['debug.security.voter.security.acl.voter.basic_permissions'] ?? $this->getDebug_Security_Voter_Security_Acl_Voter_BasicPermissionsService());
            yield 2 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 3 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService());
            yield 4 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 5), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin' => ['privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.admin' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.e_DUqBA'] ?? ($this->privates['.security.request_matcher.e_DUqBA'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.OKzIMc6'] ?? ($this->privates['.security.request_matcher.OKzIMc6'] = new \Symfony\Component\HttpFoundation\RequestMatcher('.*')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL)))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php';

        return $this->privates['debug.security.voter.security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.acl.voter.basic_permissions' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Acl_Voter_BasicPermissionsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Voter/AclVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/ObjectIdentityRetrievalStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Domain/ObjectIdentityRetrievalStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/PermissionMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/MaskBuilderRetrievalInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/BasicPermissionMap.php';

        return $this->privates['debug.security.voter.security.acl.voter.basic_permissions'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Acl\Voter\AclVoter(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->privates['security.acl.security_identity_retrieval_strategy'] ?? $this->getSecurity_Acl_SecurityIdentityRetrievalStrategyService()), ($this->privates['security.acl.permission.map'] ?? ($this->privates['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap())), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.acl.voter.user_permissions' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Acl_Voter_UserPermissionsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Voter/AclVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/Authorization/Voter/UserAclVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/ObjectIdentityRetrievalStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Domain/ObjectIdentityRetrievalStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/PermissionMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/MaskBuilderRetrievalInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Permission/BasicPermissionMap.php';

        return $this->privates['debug.security.voter.security.acl.voter.user_permissions'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Sonata\UserBundle\Security\Authorization\Voter\UserAclVoter(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->privates['security.acl.security_identity_retrieval_strategy'] ?? $this->getSecurity_Acl_SecurityIdentityRetrievalStrategyService()), ($this->privates['security.acl.permission.map'] ?? ($this->privates['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap())), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/CacheWarmer/ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => ['privates', 'fos_user.change_password.form.type', 'getFosUser_ChangePassword_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\GroupFormType' => ['privates', 'fos_user.group.form.type', 'getFosUser_Group_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => ['privates', 'fos_user.profile.form.type', 'getFosUser_Profile_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => ['privates', 'fos_user.registration.form.type', 'getFosUser_Registration_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'fos_user.resetting.form.type', 'getFosUser_Resetting_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => ['privates', 'fos_user.username_form_type', 'getFosUser_UsernameFormTypeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => ['services', 'sonata.admin.form.type.admin', 'getSonata_Admin_Form_Type_AdminService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => ['services', 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService', false],
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => ['services', 'sonata.admin.form.type.collection', 'getSonata_Admin_Form_Type_CollectionService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => ['services', 'sonata.admin.form.filter.type.choice', 'getSonata_Admin_Form_Filter_Type_ChoiceService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => ['services', 'sonata.admin.form.filter.type.daterange', 'getSonata_Admin_Form_Filter_Type_DaterangeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => ['services', 'sonata.admin.form.filter.type.datetime_range', 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => ['services', 'sonata.admin.form.filter.type.datetime', 'getSonata_Admin_Form_Filter_Type_DatetimeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => ['services', 'sonata.admin.form.filter.type.date', 'getSonata_Admin_Form_Filter_Type_DateService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => ['services', 'sonata.admin.form.filter.type.default', 'getSonata_Admin_Form_Filter_Type_DefaultService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => ['services', 'sonata.admin.form.filter.type.number', 'getSonata_Admin_Form_Filter_Type_NumberService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => ['services', 'sonata.admin.form.type.model_autocomplete', 'getSonata_Admin_Form_Type_ModelAutocompleteService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => ['services', 'sonata.admin.form.type.model_hidden', 'getSonata_Admin_Form_Type_ModelHiddenService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => ['services', 'sonata.admin.form.type.model_list', 'getSonata_Admin_Form_Type_ModelListService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => ['services', 'sonata.admin.form.type.model_reference', 'getSonata_Admin_Form_Type_ModelReferenceService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => ['services', 'sonata.admin.form.type.model_choice', 'getSonata_Admin_Form_Type_ModelChoiceService', false],
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => ['privates', 'sonata.block.form.type.container_template', 'getSonata_Block_Form_Type_ContainerTemplateService', false],
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => ['privates', 'sonata.block.form.type.block', 'getSonata_Block_Form_Type_BlockService', false],
            'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => ['services', 'sonata.core.form.type.boolean_legacy', 'getSonata_Core_Form_Type_BooleanLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => ['services', 'sonata.core.form.type.collection_legacy', 'getSonata_Core_Form_Type_CollectionLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => ['services', 'sonata.core.form.type.color_selector', 'getSonata_Core_Form_Type_ColorSelectorService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ColorType' => ['services', 'sonata.core.form.type.color_legacy', 'getSonata_Core_Form_Type_ColorLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => ['services', 'sonata.core.form.type.date_picker_legacy', 'getSonata_Core_Form_Type_DatePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => ['services', 'sonata.core.form.type.date_range_picker_legacy', 'getSonata_Core_Form_Type_DateRangePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => ['services', 'sonata.core.form.type.date_range_legacy', 'getSonata_Core_Form_Type_DateRangeLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => ['services', 'sonata.core.form.type.datetime_picker_legacy', 'getSonata_Core_Form_Type_DatetimePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => ['services', 'sonata.core.form.type.datetime_range_picker_legacy', 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => ['services', 'sonata.core.form.type.datetime_range_legacy', 'getSonata_Core_Form_Type_DatetimeRangeLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\EqualType' => ['services', 'sonata.core.form.type.equal_legacy', 'getSonata_Core_Form_Type_EqualLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => ['services', 'sonata.core.form.type.array_legacy', 'getSonata_Core_Form_Type_ArrayLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => ['services', 'sonata.core.form.type.translatable_choice', 'getSonata_Core_Form_Type_TranslatableChoiceService', false],
            'Sonata\\Form\\Type\\BooleanType' => ['services', 'sonata.core.form.type.boolean', 'getSonata_Core_Form_Type_BooleanService', false],
            'Sonata\\Form\\Type\\CollectionType' => ['services', 'sonata.core.form.type.collection', 'getSonata_Core_Form_Type_CollectionService', false],
            'Sonata\\Form\\Type\\DatePickerType' => ['services', 'sonata.core.form.type.date_picker', 'getSonata_Core_Form_Type_DatePickerService', false],
            'Sonata\\Form\\Type\\DateRangePickerType' => ['services', 'sonata.core.form.type.date_range_picker', 'getSonata_Core_Form_Type_DateRangePickerService', false],
            'Sonata\\Form\\Type\\DateRangeType' => ['services', 'sonata.core.form.type.date_range', 'getSonata_Core_Form_Type_DateRangeService', false],
            'Sonata\\Form\\Type\\DateTimePickerType' => ['services', 'sonata.core.form.type.datetime_picker', 'getSonata_Core_Form_Type_DatetimePickerService', false],
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => ['services', 'sonata.core.form.type.datetime_range_picker', 'getSonata_Core_Form_Type_DatetimeRangePickerService', false],
            'Sonata\\Form\\Type\\DateTimeRangeType' => ['services', 'sonata.core.form.type.datetime_range', 'getSonata_Core_Form_Type_DatetimeRangeService', false],
            'Sonata\\Form\\Type\\EqualType' => ['services', 'sonata.core.form.type.equal', 'getSonata_Core_Form_Type_EqualService', false],
            'Sonata\\Form\\Type\\ImmutableArrayType' => ['services', 'sonata.core.form.type.array', 'getSonata_Core_Form_Type_ArrayService', false],
            'Sonata\\MediaBundle\\Form\\Type\\MediaType' => ['privates', 'sonata.media.form.type.media', 'getSonata_Media_Form_Type_MediaService', false],
            'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType' => ['services', 'sonata.user.form.roles_matrix_type', 'getSonata_User_Form_RolesMatrixTypeService', false],
            'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType' => ['services', 'sonata.user.form.type.security_roles', 'getSonata_User_Form_Type_SecurityRolesService', false],
            'Sonata\\UserBundle\\Form\\Type\\UserGenderListType' => ['privates', 'sonata.user.form.gender_list', 'getSonata_User_Form_GenderListService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\GroupFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ColorType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\EqualType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => '?',
            'Sonata\\Form\\Type\\BooleanType' => '?',
            'Sonata\\Form\\Type\\CollectionType' => '?',
            'Sonata\\Form\\Type\\DatePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangeType' => '?',
            'Sonata\\Form\\Type\\DateTimePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangeType' => '?',
            'Sonata\\Form\\Type\\EqualType' => '?',
            'Sonata\\Form\\Type\\ImmutableArrayType' => '?',
            'Sonata\\MediaBundle\\Form\\Type\\MediaType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\UserGenderListType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->services['sonata.admin.form.extension.field'] ?? $this->getSonata_Admin_Form_Extension_FieldService());
            yield 6 => ($this->services['sonata.admin.form.extension.field.mopa'] ?? ($this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension()));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () {
            yield 0 => ($this->services['sonata.admin.form.extension.choice'] ?? ($this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Util/ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/DoctrineType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/BaseType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/Type/FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ChangePasswordFormType.php';

        return $this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/ActivateUserCommand.php';

        $this->privates['fos_user.command.activate_user'] = $instance = new \FOS\UserBundle\Command\ActivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:activate');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/ChangePasswordCommand.php';

        $this->privates['fos_user.command.change_password'] = $instance = new \FOS\UserBundle\Command\ChangePasswordCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:change-password');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/CreateUserCommand.php';

        $this->privates['fos_user.command.create_user'] = $instance = new \FOS\UserBundle\Command\CreateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:create');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/DeactivateUserCommand.php';

        $this->privates['fos_user.command.deactivate_user'] = $instance = new \FOS\UserBundle\Command\DeactivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:deactivate');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/RoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/DemoteUserCommand.php';

        $this->privates['fos_user.command.demote_user'] = $instance = new \FOS\UserBundle\Command\DemoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:demote');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/RoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Command/PromoteUserCommand.php';

        $this->privates['fos_user.command.promote_user'] = $instance = new \FOS\UserBundle\Command\PromoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:promote');

        return $instance;
    }

    /**
     * Gets the private 'fos_user.group.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/GroupFormType.php';

        return $this->privates['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('App\\Entity\\Group');
    }

    /**
     * Gets the private 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/AuthenticationListener.php';

        return $this->privates['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(($this->privates['fos_user.security.login_manager'] ?? $this->getFosUser_Security_LoginManagerService()), 'main');
    }

    /**
     * Gets the private 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php';

        return $this->privates['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/ResettingListener.php';

        return $this->privates['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener(($this->services['router'] ?? $this->getRouterService()), 86400);
    }

    /**
     * Gets the private 'fos_user.object_manager' shared service.
     *
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getFosUser_ObjectManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';

        return $this->privates['fos_user.object_manager'] = ($this->services['doctrine'] ?? $this->getDoctrineService())->getManager(NULL);
    }

    /**
     * Gets the private 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ProfileFormType.php';

        return $this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/RegistrationFormType.php';

        return $this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.resetting.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

        return $this->privates['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', $this->parameters['fos_user.resetting.form.validation_groups']);
    }

    /**
     * Gets the private 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/ResettingFormType.php';

        return $this->privates['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('App\\Entity\\User');
    }

    /**
     * Gets the private 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/LastLoginListener.php';

        return $this->privates['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the private 'fos_user.security.login_manager' shared service.
     *
     * @return \FOS\UserBundle\Security\LoginManager
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/LoginManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/LoginManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        return $this->privates['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL);
    }

    /**
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Security/UserProvider.php';

        return $this->privates['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /**
     * Gets the private 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/UsernameFormType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/DataTransformer/UserToUsernameTransformer.php';

        return $this->privates['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService())));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';

        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdater.php';

        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Util/UserManipulator.php';

        return $this->privates['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/ArrayCollectionHandler.php';

        return $this->privates['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
    }

    /**
     * Gets the private 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/ConstraintViolationHandler.php';

        return $this->privates['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the private 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/DateHandler.php';

        return $this->privates['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'UTC', true);
    }

    /**
     * Gets the private 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/Subscriber/DoctrineProxySubscriber.php';

        return $this->privates['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
    }

    /**
     * Gets the private 'jms_serializer.form_error_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/FormErrorHandler.php';

        return $this->privates['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'jms_serializer.iterator_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\IteratorHandler
     */
    protected function getJmsSerializer_IteratorHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/IteratorHandler.php';

        return $this->privates['jms_serializer.iterator_handler'] = new \JMS\Serializer\Handler\IteratorHandler();
    }

    /**
     * Gets the private 'knp_menu.menu_provider.builder_alias' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider
     */
    protected function getKnpMenu_MenuProvider_BuilderAliasService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Provider/BuilderAliasProvider.php';

        return $this->privates['knp_menu.menu_provider.builder_alias'] = new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(($this->services['kernel'] ?? $this->get('kernel', 1)), $this, ($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.chain' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProvider_ChainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/ChainProvider.php';

        return $this->privates['knp_menu.menu_provider.chain'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->getKnpMenu_MenuProvider_LazyService());
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->getKnpMenu_MenuProvider_BuilderAliasService());
            yield 2 => ($this->privates['sonata.admin.menu.group_provider'] ?? $this->getSonata_Admin_Menu_GroupProviderService());
        }, 3));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    protected function getKnpMenu_MenuProvider_LazyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php';

        return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sonata_admin_sidebar' => function () {
            return ($this->services['sonata.admin.sidebar_menu'] ?? $this->getSonata_Admin_SidebarMenuService());
        }]);
    }

    /**
     * Gets the private 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/Renderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/ListRenderer.php';

        return $this->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), [], 'UTF-8');
    }

    /**
     * Gets the private 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/TwigRenderer.php';

        return $this->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(($this->services['twig'] ?? $this->getTwigService()), '@KnpMenu/menu.html.twig', ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), []);
    }

    /**
     * Gets the private 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/RouteVoter.php';

        return $this->privates['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ArrayTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login_check$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/resetting'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), [0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.acl.dbal.schema_listener' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\EventListener\AclSchemaListener
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src/EventListener/AclSchemaListener.php';

        return $this->privates['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\AclBundle\EventListener\AclSchemaListener(($this->services['security.acl.dbal.schema'] ?? $this->getSecurity_Acl_Dbal_SchemaService()));
    }

    /**
     * Gets the private 'security.acl.security_identity_retrieval_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy
     */
    protected function getSecurity_Acl_SecurityIdentityRetrievalStrategyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/SecurityIdentityRetrievalStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Domain/SecurityIdentityRetrievalStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';

        return $this->privates['security.acl.security_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.admin'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.form.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => '/admin/login', 'default_target_path' => '/admin/dashboard', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('admin');
        $c = ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $this->privates['security.authentication.listener.form.admin'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'admin', $b, $d, ['use_forward' => false, 'check_path' => '/admin/login_check', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /**
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => '/login', 'default_target_path' => '/login', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $this->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'main', $b, $d, ['use_forward' => false, 'check_path' => '/login_check', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
    }

    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginFormAuthenticator'] ?? $this->getLoginFormAuthenticatorService());
        }, 1), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';

        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->getSecurity_Authentication_Provider_Dao_AdminService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 4 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.dao.admin' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.dao.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'admin', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /**
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginFormAuthenticator'] ?? $this->getLoginFormAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.login_provider'] ?? $this->getSecurity_User_Provider_Concrete_LoginProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ChannelListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'FOS\\UserBundle\\Model\\UserInterface', 1 => 'App\\Entity\\Customer']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ContextListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService());
            yield 1 => ($this->privates['security.user.provider.concrete.login_provider'] ?? $this->getSecurity_User_Provider_Concrete_LoginProviderService());
        }, 2), 'user', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['FOS\\UserBundle\\Model\\UserInterface' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']], 'App\\Entity\\Customer' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }

    /**
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, '/admin/login'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout']);
        $c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $this->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.form.admin'] ?? $this->getSecurity_Authentication_Listener_Form_AdminService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.admin'] ?? $this->getSecurity_Authentication_Listener_Anonymous_AdminService());
            yield 4 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, '/admin/login', false), NULL, NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.e_DUqBA', true, false, NULL, 'user', 'security.authentication.form_entry_point.admin', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout']);
        $c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, '/login', false), NULL, NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.OKzIMc6', true, false, 'security.user.provider.concrete.login_provider', 'user', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'guard', 1 => 'form_login', 2 => 'anonymous'], NULL));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout.handler.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler
     */
    protected function getSecurity_Logout_Handler_CsrfTokenClearingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/CsrfTokenClearingLogoutHandler.php';

        return $this->privates['security.logout.handler.csrf_token_clearing'] = new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, 'user');
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, 'user');

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';

        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'security.user.provider.concrete.login_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_LoginProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.login_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App:Customer', 'email', NULL);
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'sonata.admin.builder.orm_datagrid' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/DatagridBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/DatagridBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/FilterTypeGuesser.php';

        return $this->privates['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['sonata.admin.builder.filter.factory'] ?? $this->getSonata_Admin_Builder_Filter_FactoryService()), new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser()]), true);
    }

    /**
     * Gets the private 'sonata.admin.builder.orm_form' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/FormContractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/FormContractor.php';

        return $this->privates['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor(($this->services['form.factory'] ?? $this->getForm_FactoryService()));
    }

    /**
     * Gets the private 'sonata.admin.builder.orm_list' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/ListBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/ListBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/TypeGuesser.php';

        return $this->privates['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder(new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser()]), ['array' => '@SonataAdmin/CRUD/list_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig', 'date' => '@SonataAdmin/CRUD/list_date.html.twig', 'time' => '@SonataAdmin/CRUD/list_time.html.twig', 'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/list_string.html.twig', 'textarea' => '@SonataAdmin/CRUD/list_string.html.twig', 'email' => '@SonataAdmin/CRUD/list_email.html.twig', 'trans' => '@SonataAdmin/CRUD/list_trans.html.twig', 'string' => '@SonataAdmin/CRUD/list_string.html.twig', 'smallint' => '@SonataAdmin/CRUD/list_string.html.twig', 'bigint' => '@SonataAdmin/CRUD/list_string.html.twig', 'integer' => '@SonataAdmin/CRUD/list_string.html.twig', 'decimal' => '@SonataAdmin/CRUD/list_string.html.twig', 'identifier' => '@SonataAdmin/CRUD/list_string.html.twig', 'currency' => '@SonataAdmin/CRUD/list_currency.html.twig', 'percent' => '@SonataAdmin/CRUD/list_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/list_choice.html.twig', 'url' => '@SonataAdmin/CRUD/list_url.html.twig', 'html' => '@SonataAdmin/CRUD/list_html.html.twig']);
    }

    /**
     * Gets the private 'sonata.admin.builder.orm_show' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/ShowBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/ShowBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/TypeGuesser.php';

        return $this->privates['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder(new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser()]), ['array' => '@SonataAdmin/CRUD/show_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig', 'date' => '@SonataAdmin/CRUD/show_date.html.twig', 'time' => '@SonataAdmin/CRUD/show_time.html.twig', 'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'email' => '@SonataAdmin/CRUD/show_email.html.twig', 'trans' => '@SonataAdmin/CRUD/show_trans.html.twig', 'string' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'currency' => '@SonataAdmin/CRUD/show_currency.html.twig', 'percent' => '@SonataAdmin/CRUD/show_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/show_choice.html.twig', 'url' => '@SonataAdmin/CRUD/show_url.html.twig', 'html' => '@SonataAdmin/CRUD/show_html.html.twig']);
    }

    /**
     * Gets the private 'sonata.admin.menu.group_provider' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider
     */
    protected function getSonata_Admin_Menu_GroupProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Menu/Provider/GroupMenuProvider.php';

        return $this->privates['sonata.admin.menu.group_provider'] = new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider(($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'sonata.block.form.type.block' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Form/Type/ServiceListType.php';

        return $this->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()));
    }

    /**
     * Gets the private 'sonata.block.form.type.container_template' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Form/Type/ContainerTemplateType.php';

        return $this->privates['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(['@SonataBlock/Block/block_container.html.twig' => 'SonataBlockBundle default template']);
    }

    /**
     * Gets the private 'sonata.core.flashmessage.twig.runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageRuntime
     */
    protected function getSonata_Core_Flashmessage_Twig_RuntimeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageRuntime.php';

        return $this->privates['sonata.core.flashmessage.twig.runtime'] = new \Sonata\Twig\Extension\FlashMessageRuntime(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));
    }

    /**
     * Gets the private 'sonata.core.model.adapter.doctrine_orm' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter
     *
     * @deprecated The "sonata.core.model.adapter.doctrine_orm" service is deprecated in favor of service "sonata.doctrine.adapter.doctrine_orm" since 3.12.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Model_Adapter_DoctrineOrmService()
    {
        @trigger_error('The "sonata.core.model.adapter.doctrine_orm" service is deprecated in favor of service "sonata.doctrine.adapter.doctrine_orm" since 3.12.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'sonata.core.twig.status_runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\StatusRuntime
     */
    protected function getSonata_Core_Twig_StatusRuntimeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/StatusRuntime.php';

        $this->privates['sonata.core.twig.status_runtime'] = $instance = new \Sonata\Twig\Extension\StatusRuntime();

        $instance->addStatusService(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));

        return $instance;
    }

    /**
     * Gets the private 'sonata.core.validator.inline' shared service.
     *
     * @return \Sonata\Form\Validator\InlineValidator
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Validator/InlineValidator.php';

        return $this->privates['sonata.core.validator.inline'] = new \Sonata\Form\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
    }

    /**
     * Gets the private 'sonata.media.buzz.browser' shared service.
     *
     * @return \Buzz\Browser
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/kriswallsmith/buzz/lib/Buzz/Browser.php';
        include_once \dirname(__DIR__, 4).'/vendor/kriswallsmith/buzz/lib/Buzz/Client/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/kriswallsmith/buzz/lib/Buzz/Client/AbstractClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/kriswallsmith/buzz/lib/Buzz/Client/AbstractCurl.php';
        include_once \dirname(__DIR__, 4).'/vendor/kriswallsmith/buzz/lib/Buzz/Client/Curl.php';

        $a = new \Buzz\Client\Curl();
        $a->setIgnoreErrors(true);
        $a->setMaxRedirects(5);
        $a->setTimeout(5);
        $a->setVerifyPeer(true);
        $a->setProxy(NULL);

        return $this->privates['sonata.media.buzz.browser'] = new \Buzz\Browser($a);
    }

    /**
     * Gets the private 'sonata.media.filesystem.local' shared service.
     *
     * @return \Gaufrette\Filesystem
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/StreamFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/ChecksumCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/SizeCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/MimeTypeProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/Local.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Filesystem/Local.php';

        return $this->privates['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem(new \Sonata\MediaBundle\Filesystem\Local((\dirname(__DIR__, 4).'/public/upload/media'), false));
    }

    /**
     * Gets the private 'sonata.media.form.type.media' shared service.
     *
     * @return \Sonata\MediaBundle\Form\Type\MediaType
     */
    protected function getSonata_Media_Form_Type_MediaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Form/Type/MediaType.php';

        $this->privates['sonata.media.form.type.media'] = $instance = new \Sonata\MediaBundle\Form\Type\MediaType(($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()), 'Application\\Sonata\\MediaBundle\\Entity\\Media');

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'sonata.media.resizer.simple' shared service.
     *
     * @return \Sonata\MediaBundle\Resizer\SimpleResizer
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/ResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/ImagineCompatibleResizerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/SimpleResizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        return $this->privates['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer(($this->privates['sonata.media.adapter.image.gd'] ?? ($this->privates['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())), 'inset', ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this))));
    }

    /**
     * Gets the private 'sonata.media.serializer.handler.gallery' shared service.
     *
     * @return \Sonata\MediaBundle\Serializer\GallerySerializerHandler
     */
    protected function getSonata_Media_Serializer_Handler_GalleryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Serializer/SerializerHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Serializer/BaseSerializerHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Serializer/GallerySerializerHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->privates['sonata.media.serializer.handler.gallery'] = new \Sonata\MediaBundle\Serializer\GallerySerializerHandler(($this->services['sonata.media.manager.gallery'] ?? ($this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Model\NoDriverManager())));
    }

    /**
     * Gets the private 'sonata.media.serializer.handler.media' shared service.
     *
     * @return \Sonata\MediaBundle\Serializer\MediaSerializerHandler
     */
    protected function getSonata_Media_Serializer_Handler_MediaService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Serializer/SerializerHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Serializer/BaseSerializerHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Serializer/MediaSerializerHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Model/NoDriverManager.php';

        return $this->privates['sonata.media.serializer.handler.media'] = new \Sonata\MediaBundle\Serializer\MediaSerializerHandler(($this->services['sonata.media.manager.media'] ?? ($this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Model\NoDriverManager())));
    }

    /**
     * Gets the private 'sonata.media.thumbnail.format' shared service.
     *
     * @return \Sonata\MediaBundle\Thumbnail\FormatThumbnail
     */
    protected function getSonata_Media_Thumbnail_FormatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Thumbnail/ThumbnailInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Thumbnail/FormatThumbnail.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/ResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/ImagineCompatibleResizerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resizer/SquareResizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/MetadataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Metadata/ProxyMetadataBuilder.php';

        $this->privates['sonata.media.thumbnail.format'] = $instance = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg');

        $instance->addResizer('sonata.media.resizer.simple', ($this->privates['sonata.media.resizer.simple'] ?? $this->getSonata_Media_Resizer_SimpleService()));
        $instance->addResizer('sonata.media.resizer.square', new \Sonata\MediaBundle\Resizer\SquareResizer(($this->privates['sonata.media.adapter.image.gd'] ?? ($this->privates['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine())), 'inset', ($this->services['sonata.media.metadata.proxy'] ?? ($this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this)))));

        return $instance;
    }

    /**
     * Gets the private 'sonata.media.validator.format' shared service.
     *
     * @return \Sonata\MediaBundle\Validator\FormatValidator
     */
    protected function getSonata_Media_Validator_FormatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Validator/FormatValidator.php';

        return $this->privates['sonata.media.validator.format'] = new \Sonata\MediaBundle\Validator\FormatValidator(($this->services['sonata.media.pool'] ?? $this->getSonata_Media_PoolService()));
    }

    /**
     * Gets the private 'sonata.templating' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TwigEngine
     *
     * @deprecated The "sonata.templating" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_TemplatingService()
    {
        @trigger_error('The "sonata.templating" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return $this->privates['sonata.templating'] = new \Sonata\BlockBundle\Templating\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), $this->getSonata_Templating_NameParserService(), $this->getSonata_Templating_LocatorService());
    }

    /**
     * Gets the private 'sonata.templating.locator' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TemplateLocator
     *
     * @deprecated The "sonata.templating.locator" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_Templating_LocatorService()
    {
        @trigger_error('The "sonata.templating.locator" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return new \Sonata\BlockBundle\Templating\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /**
     * Gets the private 'sonata.templating.name_parser' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TemplateNameParser
     *
     * @deprecated The "sonata.templating.name_parser" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_Templating_NameParserService()
    {
        @trigger_error('The "sonata.templating.name_parser" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return new \Sonata\BlockBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'sonata.user.form.gender_list' shared service.
     *
     * @return \Sonata\UserBundle\Form\Type\UserGenderListType
     *
     * @deprecated The "sonata.user.form.gender_list" service is deprecated since 4.1 and will be removed in 5.0.
     */
    protected function getSonata_User_Form_GenderListService()
    {
        @trigger_error('The "sonata.user.form.gender_list" service is deprecated since 4.1 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['sonata.user.form.gender_list'] = new \Sonata\UserBundle\Form\Type\UserGenderListType('App\\Entity\\User', 'getGenderList', 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType');
    }

    /**
     * Gets the private 'sonata.user.matrix_roles_builder' shared service.
     *
     * @return \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder
     */
    protected function getSonata_User_MatrixRolesBuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/RolesBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/ExpandableRolesBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/PermissionLabelsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/MatrixRolesBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/MatrixRolesBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/AdminRolesBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Security/RolesBuilder/SecurityRolesBuilder.php';

        $a = ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
        $b = ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService());
        $c = ($this->services['translator'] ?? $this->getTranslatorService());

        return $this->privates['sonata.user.matrix_roles_builder'] = new \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), new \Sonata\UserBundle\Security\RolesBuilder\AdminRolesBuilder($a, $b, $c), new \Sonata\UserBundle\Security\RolesBuilder\SecurityRolesBuilder($a, $b, $c, $this->parameters['security.role_hierarchy.roles']));
    }

    /**
     * Gets the private 'templating.cache_warmer.template_paths' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer
     *
     * @deprecated The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_CacheWarmer_TemplatePathsService()
    {
        @trigger_error('The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the private 'templating.finder' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder
     *
     * @deprecated The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_FinderService()
    {
        @trigger_error('The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/TemplateNameParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Templating/TemplateFilenameParser.php';

        return $this->privates['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder(($this->services['kernel'] ?? $this->get('kernel', 1)), new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser(), (\dirname(__DIR__, 4).'/src/Resources'));
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     *
     * @deprecated The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LocatorService()
    {
        @trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     *
     * @deprecated The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_NameParserService()
    {
        @trigger_error('The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/PhpExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Translation/TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'twig.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer
     *
     * @deprecated The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTwig_CacheWarmerService()
    {
        @trigger_error('The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), [(\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL]);
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), (\dirname(__DIR__, 4).'/src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Command/LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src'), [(\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';

        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml'), 2 => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))]);
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
        $instance->addXmlMapping((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(NULL, 'UTF-8', true, NULL);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';

        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService', false],
            'Sonata\\Form\\Validator\\InlineValidator' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService', false],
            'Sonata\\MediaBundle\\Validator\\FormatValidator' => ['privates', 'sonata.media.validator.format', 'getSonata_Media_Validator_FormatService', false],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'sonata.admin.validator.inline' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService', false],
            'sonata.core.validator.inline' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService', false],
            'sonata.media.validator.format' => ['privates', 'sonata.media.validator.format', 'getSonata_Media_Validator_FormatService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => '?',
            'Sonata\\Form\\Validator\\InlineValidator' => '?',
            'Sonata\\MediaBundle\\Validator\\FormatValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'sonata.admin.validator.inline' => '?',
            'sonata.core.validator.inline' => '?',
            'sonata.media.validator.format' => '?',
            'validator.expression' => '?',
        ]));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'fos_user.registration.confirmation.from_email' => false,
        'fos_user.resetting.email.from_email' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'fos_user.registration.confirmation.from_email': $value = [
                $this->getEnv('MAILER_USER_ADDRESS') => $this->getEnv('MAILER_USER_NAME'),
            ]; break;
            case 'fos_user.resetting.email.from_email': $value = [
                $this->getEnv('MAILER_USER_ADDRESS') => $this->getEnv('MAILER_USER_NAME'),
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SonataDatagridBundle' => 'Sonata\\DatagridBundle\\SonataDatagridBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'AclBundle' => 'Symfony\\Bundle\\AclBundle\\AclBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SonataDatagridBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src'),
                    'namespace' => 'Sonata\\DatagridBundle',
                ],
                'SonataCoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataBlockBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'SonataAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'SonataDoctrineORMAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ],
                'SonataEasyExtendsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/easy-extends-bundle/src'),
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ],
                'FOSUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'SonataUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src'),
                    'namespace' => 'Sonata\\UserBundle',
                ],
                'AclBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\AclBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'SonataMediaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/media-bundle/src'),
                    'namespace' => 'Sonata\\MediaBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => '@SonataUser/Form/form_admin_fields.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'sonata.core.flashmessage.manager.class' => 'Sonata\\Twig\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.container' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.empty' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.text' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.rss' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.menu' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.template' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.search_result' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.stats' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.media.block.media' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.media.block.feature_media' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.media.block.gallery' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.media.block.gallery_list' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.admin.block.admin_list',
                1 => 'sonata.block.service.container',
                2 => 'sonata.block.service.empty',
                3 => 'sonata.block.service.text',
                4 => 'sonata.block.service.rss',
                5 => 'sonata.block.service.menu',
                6 => 'sonata.block.service.template',
                7 => 'sonata.admin.block.search_result',
                8 => 'sonata.admin.block.stats',
                9 => 'sonata.media.block.media',
                10 => 'sonata.media.block.feature_media',
                11 => 'sonata.media.block.gallery',
                12 => 'sonata.media.block.gallery_list',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.block.service.container' => 'sonata.cache.noop',
                    'sonata.block.service.empty' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                    'sonata.block.service.menu' => 'sonata.cache.noop',
                    'sonata.block.service.template' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.admin.block.stats' => 'sonata.cache.noop',
                    'sonata.media.block.media' => 'sonata.cache.noop',
                    'sonata.media.block.feature_media' => 'sonata.cache.noop',
                    'sonata.media.block.gallery' => 'sonata.cache.noop',
                    'sonata.media.block.gallery_list' => 'sonata.cache.noop',
                ],
            ],
            'sonata_blocks.default_contexts' => [

            ],
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.legacy_twig_text_extension' => false,
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'user_block' => '@SonataUser/Admin/Core/user_block.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'layout' => '@SonataAdmin/standard_layout.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [

            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'roles' => [

                    ],
                    'settings' => [

                    ],
                    'class' => 'col-md-4',
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.mosaic_background' => 'data:image/png;base64,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',
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [

            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => [
                'types' => [
                    'list' => [
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'integer' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataAdmin/CRUD/list_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ],
                    'show' => [
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'currency' => '@SonataAdmin/CRUD/show_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ],
                ],
                'form' => [
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ],
                'filter' => [
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ],
            ],
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'App\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.label_catalogue' => 'SonataUserBundle',
            'sonata.user.admin.groupicon' => '<i class=\'fa fa-users\'></i>',
            'security.acl.user_voter.class' => 'Sonata\\UserBundle\\Security\\Authorization\\Voter\\UserAclVoter',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'App\\Entity\\User',
            'sonata.user.admin.group.entity' => 'App\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController',
            'sonata.user.admin.group.controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController',
            'sonata.user.default_avatar' => 'bundles/sonatauser/default_avatar.png',
            'sonata.user.impersonating' => false,
            'sonata.user.google.authenticator.enabled' => false,
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.adapter.image.gd.class' => 'Imagine\\Gd\\Imagine',
            'sonata.media.adapter.image.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'sonata.media.adapter.image.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.block.gallery_list.class' => 'Sonata\\MediaBundle\\Block\\GalleryListBlockService',
            'sonata.media.admin_format' => [
                'width' => 200,
                'height' => NULL,
                'quality' => 90,
                'format' => 'jpg',
                'constraint' => true,
            ],
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.admin.gallery.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia',
            'sonata.media.media.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.gallery.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.core.form.types' => [
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.file',
                3 => 'sonata.core.form.type.array_legacy',
                4 => 'sonata.core.form.type.boolean_legacy',
                5 => 'sonata.core.form.type.collection_legacy',
                6 => 'sonata.core.form.type.translatable_choice',
                7 => 'sonata.core.form.type.date_range_legacy',
                8 => 'sonata.core.form.type.datetime_range_legacy',
                9 => 'sonata.core.form.type.date_picker_legacy',
                10 => 'sonata.core.form.type.datetime_picker_legacy',
                11 => 'sonata.core.form.type.date_range_picker_legacy',
                12 => 'sonata.core.form.type.datetime_range_picker_legacy',
                13 => 'sonata.core.form.type.equal_legacy',
                14 => 'sonata.core.form.type.color_selector',
                15 => 'sonata.core.form.type.color_legacy',
                16 => 'sonata.core.form.type.array',
                17 => 'sonata.core.form.type.boolean',
                18 => 'sonata.core.form.type.collection',
                19 => 'sonata.core.form.type.date_range',
                20 => 'sonata.core.form.type.datetime_range',
                21 => 'sonata.core.form.type.date_picker',
                22 => 'sonata.core.form.type.datetime_picker',
                23 => 'sonata.core.form.type.date_range_picker',
                24 => 'sonata.core.form.type.datetime_range_picker',
                25 => 'sonata.core.form.type.equal',
                26 => 'sonata.block.form.type.block',
                27 => 'sonata.block.form.type.container_template',
                28 => 'sonata.admin.form.type.admin',
                29 => 'sonata.admin.form.type.model_choice',
                30 => 'sonata.admin.form.type.model_list',
                31 => 'sonata.admin.form.type.model_reference',
                32 => 'sonata.admin.form.type.model_hidden',
                33 => 'sonata.admin.form.type.model_autocomplete',
                34 => 'sonata.admin.form.type.collection',
                35 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                36 => 'sonata.admin.form.filter.type.number',
                37 => 'sonata.admin.form.filter.type.choice',
                38 => 'sonata.admin.form.filter.type.default',
                39 => 'sonata.admin.form.filter.type.date',
                40 => 'sonata.admin.form.filter.type.daterange',
                41 => 'sonata.admin.form.filter.type.datetime',
                42 => 'sonata.admin.form.filter.type.datetime_range',
                43 => 'form.type.entity',
                44 => 'fos_user.username_form_type',
                45 => 'fos_user.profile.form.type',
                46 => 'fos_user.registration.form.type',
                47 => 'fos_user.change_password.form.type',
                48 => 'fos_user.resetting.form.type',
                49 => 'fos_user.group.form.type',
                50 => 'sonata.user.form.type.security_roles',
                51 => 'sonata.user.form.roles_matrix_type',
                52 => 'sonata.user.form.gender_list',
                53 => 'sonata.media.form.type.media',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'sonata.admin.form.extension.field',
                8 => 'sonata.admin.form.extension.field.mopa',
                9 => 'sonata.admin.form.extension.choice',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
                1 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
                2 => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
                3 => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
                4 => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
                5 => 'Sonata\\MediaBundle\\Command\\AddMassMediaCommand',
                6 => 'Sonata\\MediaBundle\\Command\\AddMediaCommand',
                7 => 'Sonata\\MediaBundle\\Command\\CleanMediaCommand',
                8 => 'Sonata\\MediaBundle\\Command\\FixMediaContextCommand',
                9 => 'Sonata\\MediaBundle\\Command\\MigrateToJsonTypeCommand',
                10 => 'Sonata\\MediaBundle\\Command\\RefreshMetadataCommand',
                11 => 'Sonata\\MediaBundle\\Command\\RemoveThumbsCommand',
                12 => 'Sonata\\MediaBundle\\Command\\SyncThumbsCommand',
                13 => 'Sonata\\MediaBundle\\Command\\UpdateCdnStatusCommand',
            ],
        ];
    }
}
