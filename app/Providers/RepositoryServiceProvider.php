<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\AdminRepository::class, \App\Repositories\AdminRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CountryRepository::class, \App\Repositories\CountryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CityRepository::class, \App\Repositories\CityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DistrictRepository::class, \App\Repositories\DistrictRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PositionRepository::class, \App\Repositories\PositionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SpeakingLanguageRepository::class, \App\Repositories\SpeakingLanguageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InterestRepository::class, \App\Repositories\InterestRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ContactInformationRepository::class, \App\Repositories\ContactInformationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PerfectRoommateRepository::class, \App\Repositories\PerfectRoommateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BudgetRepository::class, \App\Repositories\BudgetRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CurrencyRepository::class, \App\Repositories\CurrencyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AvatarRepository::class, \App\Repositories\AvatarRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VerificationRepository::class, \App\Repositories\VerificationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyRepository::class, \App\Repositories\PropertyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyTypeRepository::class, \App\Repositories\PropertyTypeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyTitleRepository::class, \App\Repositories\PropertyTitleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyDescriptionRepository::class, \App\Repositories\PropertyDescriptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AmenitieRepository::class, \App\Repositories\AmenitieRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AmenitiesPropertyRepository::class, \App\Repositories\AmenitiesPropertyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\FacilitieRepository::class, \App\Repositories\FacilitieRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\FacilitiesPropertyRepository::class, \App\Repositories\FacilitiesPropertyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RuleRepository::class, \App\Repositories\RuleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RulesPropertyRepository::class, \App\Repositories\RulesPropertyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\StreetRepository::class, \App\Repositories\StreetRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyLocationRepository::class, \App\Repositories\PropertyLocationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyPhotoRepository::class, \App\Repositories\PropertyPhotoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyAccommodationRepository::class, \App\Repositories\PropertyAccommodationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyRoomRepository::class, \App\Repositories\PropertyRoomRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyBedRepository::class, \App\Repositories\PropertyBedRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyCalendarRepository::class, \App\Repositories\PropertyCalendarRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BlockDayRepository::class, \App\Repositories\BlockDayRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyRateRepository::class, \App\Repositories\PropertyRateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyPolicyRepository::class, \App\Repositories\PropertyPolicyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyRuleRepository::class, \App\Repositories\PropertyRuleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyFacilitieRepository::class, \App\Repositories\PropertyFacilitieRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyAmenitieRepository::class, \App\Repositories\PropertyAmenitieRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PropertyRuleDescriptionRepository::class, \App\Repositories\PropertyRuleDescriptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AdminRepository::class, \App\Repositories\AdminRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AmenitieRepository::class, \App\Repositories\AmenitieRepositoryEloquent::class);
        //:end-bindings:
    }
}
