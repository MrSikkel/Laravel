<?php

namespace App\Providers;


use App\Ask;
use App\Asked_question;
use App\Contract;
use App\Attachment;
use App\Course;
use App\Date_and_time;
use App\Entry_course;
use App\Group;
use App\Handbook_course;
use App\Info_page;
use App\Master_class;
use App\Message;
use App\Organization_card;
use App\Page_attachment;
//use App\Passport;
use App\Political;
use App\Profile;
use App\Question;
use App\Receipt;
use App\Result;
use App\Role;
use App\Survey;
use App\Test;
use App\User;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\AskPolicy;
use App\Policies\AskedQuetionPolicy;
use App\Policies\ContractPolicy;
use App\Policies\AttachmentPolicy;
use App\Policies\CoursePolicy;
use App\Policies\Date_and_timePolicy;
use App\Policies\Entry_coursePolicy;
use App\Policies\GroupPolicy;
use App\Policies\Handbook_coursePolicy;
use App\Policies\Info_pagePolicy;
use App\Policies\Master_classPolicy;
use App\Policies\MessagePolicy;
use App\Policies\Organization_cardPolicy;
use App\Policies\Page_attachmentPolicy;
//use App\Policies\PassportPolicy;
use App\Policies\PoliticalPolicy;
use App\Policies\ProfilePolicy;
use App\Policies\QuestionPolicy;
use App\Policies\ReceiptPolicy;
use App\Policies\RolePolicy;
use App\Policies\SurveyPolicy;
use App\Policies\TestPolicy;
use App\Policies\UserPolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Ask::class => AskPolicy::class,
        Contract::class => CoursePolicy::class,
        Asked_question::class => AskedQuetionPolicy::class,
        Attachment::class => AttachmentPolicy::class,
        Course::class => CoursePolicy::class,
        Date_and_time::class => Date_and_timePolicy::class,
        Entry_course::class => Entry_coursePolicy::class,
        Group::class => GroupPolicy::class,
        Handbook_course::class => Handbook_coursePolicy::class,
        Info_page::class => Info_pagePolicy::class,
        Master_class::class => Master_classPolicy::class,
        Message::class => MessagePolicy::class,
        Organization_card::class => Organization_cardPolicy::class,
        Page_attachment::class => Page_attachmentPolicy::class,
        Passport::class => PassportPolicy::class,
        Political::class => PoliticalPolicy::class,
        Profile::class => ProfilePolicy::class,
        Question::class => QuestionPolicy::class,
        Receipt::class => ReceiptPolicy::class,
        Result::class => ReceiptPolicy::class,
        Role::class => RolePolicy::class,
        Survey::class => SurveyPolicy::class,
        Test::class => TestPolicy::class,
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
		Passport::routes();
        //
    }
}
