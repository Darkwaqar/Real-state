<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_detials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            //$table->integer('ListingKey')->nullable();
            $table->string('StreetName')->nullable();
            $table->integer('AssociationFee')->nullable();
            $table->string('AssociationFeeFrequency',30)->nullable();
            $table->string('Country',10)->nullable();
            $table->string('HeatingYN',7)->nullable(true);
            $table->string('CountyOrParish',30)->nullable();
            $table->string('BuilderName')->nullable();
            $table->string('MLSArea')->nullable();
            $table->text('Topography')->nullable();
            $table->string('PowerCompany',150)->nullable();
            $table->text('Inclusions')->nullable();
            $table->string('Status')->nullable();
            $table->integer('LotSizeAcres')->nullable();
            $table->integer('LotSizeSquareFeet')->nullable();
            $table->text('SiteFeatures')->nullable();
            $table->string('WaterCompany')->nullable();
            $table->text('StyleCode')->nullable();
            $table->string('SewerCompany',150)->nullable();
            $table->string('NWM_WaterHeaterLocation')->nullable();
            $table->string('NWM_WaterHeaterType',150)->nullable();
            $table->string('VirtualTourURLUnbranded')->nullable();
            $table->string('FireplaceYN',10)->nullable(true);
            $table->integer('FireplacesTotal')->nullable();
            $table->string('Furnished',100)->nullable();
            $table->string('EntryLocation',100)->nullable();
            $table->string('HeatingCoolingType')->nullable();
            $table->integer('GarageSpaces')->nullable();
            $table->string('GarageYN',10)->nullable(true);
            $table->integer('StoriesTotal')->nullables();
            $table->string('ViewYN',10)->nullable(true);
            $table->string('NewConstructionYN',10)->nullable();
            $table->integer('ParkingTotal')->nullable();
            $table->string('ElevationUnits',50)->nullable();
            $table->integer('CoveredSpaces')->nullable();
            $table->double('TaxAnnualAmount')->nullable();
            $table->integer('TaxYear')->nullable();
            $table->string('PropertySubType',150)->nullable();
            $table->string('PropertyType')->nullable();
            $table->integer('YearBuilt')->nullable();
            $table->string('MiddleOrJuniorSchool')->nullable();
            $table->string('HighSchool')->nullable();
            $table->string('BuildingInformation')->nullable();
            $table->string('HighSchoolDistrict')->nullable();
            $table->string('ElementarySchool')->nullable();
            $table->integer('YearBuiltEffective')->nullable();
            $table->string('ElectricOnPropertyYN',10)->nullable(true);
            $table->integer('BathroomsThreeQuarter')->nullable();
            $table->integer('BathroomsOneQuarter')->nullable();
            $table->string('HOAdues')->nullable();
            $table->string('TotalRooms')->nullable();
            $table->string('Relatedwebsite')->nullable();
            $table->string('CoListAgentFullName',150)->nullable();
            $table->string('CoListAgentKeyNumeric',100)->nullable();
            $table->string('CoListAgentKey',100)->nullable();
            $table->string('CoListAgentMlsId',100)->nullable();
            $table->string('CoListOfficeKeyNumeric',100)->nullable();
            $table->string('CoListOfficeKey',100)->nullable();
            $table->string('CoListOfficeMlsId',100)->nullable();
            $table->string('CoListOfficeName')->nullable();
            $table->string('CoListOfficePhone',50)->nullable();
            $table->string('ContractStatusChangeDate',100)->nullable();


			$table->string('StreetDirPrefix',20)->nullable();
            $table->string('NWM_Franchise',10)->nullable();
            $table->string('TotalActualRent',50)->nullable();
            $table->string('NWM_DepthOfLot',50)->nullable();
            $table->string('MainLevelBedrooms',30)->nullable();
            $table->string('ApproxbuildSquareFeet',50)->nullable();//NWM_ApproximateBuildingSquareFeet
            $table->string('ManufacturingSquareFeet',50)->nullable();//NWM_ApproximateWarehouseManufacturingSquareFeet
            $table->string('NWM_AvailablePads',15)->nullable();
            $table->string('NWM_HoursOfOperation',150)->nullable();
            $table->string('NWM_LeasedItemsFlag',10)->nullable();
            $table->string('NWM_LiensMortgages',10)->nullable();
            $table->dateTime('ModifiTimstp')->nullable();//corbon//ModificationTimestamp
            $table->string('BuyerAgencyCompensation',15)->nullable();
            $table->string('CarportYN',10)->nullable();
            $table->string('CoolingYN',10)->nullable();
            $table->text('NWM_ReportsDocsCompleted')->nullable();
            $table->text('NWM_Restrictions')->nullable();
            $table->string('DirectionFaces',100)->nullable();
            $table->string('LandLeaseYN',10)->nullable();

            $table->string('CumulativeDaysOnMarket',50)->nullable();
            $table->string('InternetAddressDisplayYN',10)->nullable();
            $table->string('InternetAutomatedValuationDisplayYN',10)->nullable();//InternetAutomatedValuationDisplayYN
            $table->string('InternetConsumerCommentYN',10)->nullable();
            $table->string('InternetEntireListingDisplayYN',10)->nullable();//InternetEntireListingDisplayYN
            $table->string('IrrigationWaterRightsYN',10)->nullable();

            $table->string('ListOfficePhoneExt',20)->nullable();
            $table->date('OnMarketDate')->nullable();
            $table->string('ParcelNumber')->nullable();
            $table->string('PhotosCount',20)->nullable();
            $table->string('SeniorCommunityYN',10)->nullable();
            $table->string('SignOnPropertyYN',10)->nullable();
            $table->string('SourceSystemName',20)->nullable();

            $table->string('WaterfrontYN',10)->nullable();
            $table->string('NWM_Bathrooms',10)->nullable();
            $table->string('StreetNumber',50)->nullable();
            $table->string('StreetNumberNumeric',50)->nullable();
            $table->dateTime('StsChngTimstmp')->nullable();//coban//StatusChangeTimestamp
            $table->string('StreetSuffix',50)->nullable();
            $table->string('NWM_NetProceeds',50)->nullable();
            $table->string('ContingentDate',10)->nullable();

            $table->dateTime('PhtosChngeTmstm')->nullable();//coban //PhotosChangeTimestamp
            $table->text('NWM_SOCComments')->nullable();
            $table->text('ZoningDescription')->nullable();
            $table->text('NWM_AppliancesIncluded')->nullable();

            $table->string('NWM_FreeAndClear',10)->nullable();
            $table->string('NWM_EffectiveYearBuiltSource',150)->nullable();
            $table->text('NWM_AdditionalTaxIds')->nullable();
            $table->string('NWM_CalculatedSquareFootage')->nullable();//revise
            $table->string('NWM_CurrentlyListedForSale',10)->nullable();
            $table->string('NWM_MinimumRentalTerm',50)->nullable();
            $table->string('NWM_GrossAdjustedIncome',50)->nullable();

            $table->string('NWM_ShortTermRentalYN',10)->nullable();
            $table->string('NWM_DPRYN',10)->nullable();
            $table->string('NWM_LandAssessedValue',50)->nullable();
            $table->text('TaxLegalDescription')->nullable();
            $table->string('NWM_GrossRentMultiplier',50)->nullable();
            $table->string('NWM_ImprovementsAssessedValue',50)->nullable();
            $table->string('NWM_ElectricityStatus',100)->nullable();


            $table->string('NWM_FIRPTAYN',10)->nullable();
            $table->string('NWM_FirstRightOfRefusal',10)->nullable();
            $table->string('NWM_LotNumber')->nullable();
            $table->string('NWM_GasStatus',150)->nullable();
            $table->string('NWM_MLSLotSizeSource')->nullable();
            $table->string('NWM_EnergySource')->nullable();
            $table->string('NWM_NewConstruction')->nullable();


            $table->string('FuelExpense',100)->nullable();
            $table->string('NetOperatingIncome',50)->nullable();
            $table->string('NumberOfUnitsTotal',50)->nullable();
            $table->string('CapRate',50)->nullable();
            $table->string('CarportSpaces',50)->nullable();
            $table->string('ElectricExpense',50)->nullable();
            $table->string('OffMarketDate',50)->nullable();


            $table->string('NWM_InactiveDate')->nullable();
            $table->string('Model')->nullable();
            $table->string('NWM_BathsFullGarage',50)->nullable();
            $table->string('NWM_BathsFullLower',50)->nullable();
            $table->string('NWM_BathsFullMain',50)->nullable();
            $table->string('NWM_BathsFullUpper',50)->nullable();
            $table->string('NWM_BathsHalfGarage',50)->nullable();


            $table->string('NWM_BathsHalfLower',50)->nullable();
            $table->string('NWM_BathsHalfMain',50)->nullable();
            $table->string('NWM_BathsHalfUpper',50)->nullable();
            $table->string('NWM_BathsThreeQuarterGarage',50)->nullable();
            $table->string('NWM_BathsThreeQuarterLower',50)->nullable();
            $table->string('NWM_BathsThreeQuarterMain',50)->nullable();
            $table->string('NWM_BathsThreeQuarterUpper',50)->nullable();

            $table->string('NWM_BedroomsLower',50)->nullable();
            $table->string('NWM_BedroomsUpper',50)->nullable();
            $table->string('OtherExpense',100)->nullable();
            $table->string('GrossScheduledIncome',50)->nullable();
            $table->string('InsuranceExpense',50)->nullable();
            $table->string('LeasableArea',50)->nullable();
            $table->string('LeasableAreaUnits')->nullable();


            $table->string('OpenParkingSpaces',50)->nullable();
            $table->string('NWM_ParkingUncoveredTotal',50)->nullable();
            $table->text('NWM_Offers')->nullable();
            $table->string('NWM_PreliminaryTitleOrdered',10)->nullable();
            $table->string('NWM_RoadOnWhichSide',150)->nullable();
            $table->text('NWM_TermsAndConditionsComments')->nullable();
            $table->string('NWM_SaleType',50)->nullable();


            $table->string('NWM_SellerDisclosure',50)->nullable();
            $table->string('NWM_SeniorExemption',10)->nullable();
            $table->string('NWM_SepticDesignInstalled',10)->nullable();
            $table->string('AvailabilityDate',12)->nullable();
            $table->string('BathroomsTotalInteger',10)->nullable();
            $table->string('BedroomsPossible',10)->nullable();
            $table->string('NWM_ShowMapLink',10)->nullable();

            $table->string('NWM_SignageStays',10)->nullable();
            $table->string('NWM_SquareFootageFinished',50)->nullable();
            $table->string('NWM_SquareFootageUnfinished',50)->nullable();
            $table->string('NWM_Location')->nullable();
            $table->string('NWM_RealProperty')->nullable();
            $table->string('NWM_SketchSubmitted',10)->nullable();
            $table->string('NWM_Block')->nullable();

            $table->string('BusinessName')->nullable();
            $table->string('detachedDwelingSqFtFnshed')->nullable();//NWM_DetachedDwellingSqFtFinished
            $table->string('NWM_FireplacesMain',150)->nullable();
            $table->string('NWM_BusRouteNumber')->nullable();
            $table->string('NWM_BusLineNearby',10)->nullable();
            $table->string('NWM_WaterJurisdiction')->nullable();
            $table->text('NWM_PropertyFeatures')->nullable();


            $table->string('NWM_RoadInformation')->nullable();
            $table->string('AttachedGarageYN',10)->nullable();
            $table->string('PurchaseContractDate',50)->nullable();
            $table->string('NWM_ThirdPartyApproval',150)->nullable();
            $table->string('NWM_ZoningClass')->nullable();
            $table->string('NWM_ZoningJurisdiction',50)->nullable();
            $table->string('AssociationYN',10)->nullable();


            $table->string('OriginatingSystemName',50)->nullable();
            $table->string('MlgCanView',10)->nullable();
            $table->string('LeaseAssignableYN',10)->nullable();
            $table->string('LivingArea',50)->nullable();
            $table->string('LivingAreaUnits')->nullable();
            $table->string('LotSizeDimensions')->nullable();
            $table->string('LotSizeUnits')->nullable();

            $table->string('OpenParkingYN',10)->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties_detials');
    }
};
