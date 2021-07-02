<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        app()->singleton('new-domain', 'http://students.com');
        $this->app->bind("App\\Repositories\\User\\UserRepositoryInterface","App\\Repositories\\User\\UserRepository");
        $this->app->bind("App\\Repositories\\Attendance\\AttendanceRepositoryInterface","App\\Repositories\\Attendance\\AttendanceRepository");
        $this->app->bind("App\\Repositories\\Classroom\\ClassroomRepositoryInterface","App\\Repositories\\Classroom\\ClassroomRepository");
        $this->app->bind("App\\Repositories\\ClassInfo\\ClassInfoRepositoryInterface","App\\Repositories\\ClassInfo\\ClassInfoRepository");
        $this->app->bind("App\\Repositories\\Course\\CourseRepositoryInterface","App\\Repositories\\Course\\CourseRepository");
        $this->app->bind("App\\Repositories\\Document\\DocumentRepositoryInterface","App\\Repositories\\Document\\DocumentRepository");
        $this->app->bind("App\\Repositories\\Exercise\\ExerciseRepositoryInterface","App\\Repositories\\Exercise\\ExerciseRepository");
        $this->app->bind("App\\Repositories\\Homework\\HomeworkRepositoryInterface","App\\Repositories\\Homework\\HomeworkRepository");
        $this->app->bind("App\\Repositories\\Lesson\\LessonRepositoryInterface","App\\Repositories\\Lesson\\LessonRepository");
        $this->app->bind("App\\Repositories\\LessonDocument\\LessonDocumentRepositoryInterface","App\\Repositories\\LessonDocument\\LessonDocumentRepository");
        $this->app->bind("App\\Repositories\\LessonExercise\\LessonExerciseRepositoryInterface","App\\Repositories\\LessonExercise\\LessonExerciseRepository");
        $this->app->bind("App\\Repositories\\Subject\\SubjectRepositoryInterface","App\\Repositories\\Subject\\SubjectRepository");
        $this->app->bind("App\\Repositories\\Permission\\PermissionRepositoryInterface","App\\Repositories\\Permission\\PermissionRepository");
        $this->app->bind("App\\Repositories\\Role\\RoleRepositoryInterface","App\\Repositories\\Role\\RoleRepository");
        $this->app->bind("App\\Repositories\\PermissionRole\\PermissionRoleRepositoryInterface","App\\Repositories\\PermissionRole\\PermissionRoleRepository");
    }
}
