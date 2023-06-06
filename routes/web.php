<?php

use App\Http\Controllers\Accounting\AccountClassificationController;
use App\Http\Controllers\Accounting\AccountingDashboardController;
use App\Http\Controllers\Accounting\AccountTypeController;
use App\Http\Controllers\Accounting\ChartofAccountController;
use App\Http\Controllers\Accounting\DemandInvoiceController;
use App\Http\Controllers\AgentListController;
use App\Http\Controllers\CashBookController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CountryDashboardController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\FileManagementController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\HospitalFileController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\InterviewLabourController;
use App\Http\Controllers\LabourDocsController;
use App\Http\Controllers\LabourManagementController;
use App\Http\Controllers\LabourPaymentController;
use App\Http\Controllers\MedicalTestController;
use App\Http\Controllers\MembersListsController;
use App\Http\Controllers\NrcController;
use App\Http\Controllers\OverseasAgentController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\PassportDatatableController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SendingController;
use App\Http\Controllers\TownshipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    if (auth()->check()) return redirect('/home');
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('users', UserController::class);
    Route::resource('country', CountryController::class);
    Route::get('find_by_country_id/{id}', [CountryController::class, 'findByCountryId'])->name('find_by_country_id');
    Route::get('country_edit/{id}', [CountryController::class, 'edit'])->name('country_edit');



    Route::resource('agent_list', AgentListController::class);
    Route::get('agent_list_excel', [AgentListController::class, 'agentListExportExcel'])->name('agent_list_excel');

    Route::resource('overseas_agent', OverseasAgentController::class);
    Route::get('overseas_agent_ajax/{id}', [OverseasAgentController::class, 'dependentAjax'])->name('overseas_agent_ajax');
    Route::get('overseas_agent_excel', [OverseasAgentController::class, 'overseasAgentExportExcel'])->name('overseas_agent_excel');

    Route::resource('passport', PassportController::class);
    Route::get('find_passport_ajax/{id}', [PassportController::class, 'findPassportAjax'])->name('find_passport_ajax');
    Route::get('passport_edit_form_ajax/{id}', [PassportController::class, 'passportEditFormAjax'])->name('passport_edit_form_ajax');
    Route::post('/passport_import', [PassportController::class, 'passportImport'])->name('passport_import');

    Route::get('/reject_passport/{id}', [PassportController::class, 'rejectPassport'])->name('reject_passport');
    Route::get('/reject_passport_list', [PassportController::class, 'rejectPassportList'])->name('reject_passport_list');
    Route::get('/cancel_reject_passport/{id}', [PassportController::class, 'cancelRejectPassport'])->name('cancel_reject_passport');
    Route::resource('demand', DemandController::class);
    Route::get('demand_ajax/{id}', [DemandController::class, 'demandAjax'])->name('demand_ajax');
    Route::get('demand_export_excel', [DemandController::class, 'demandExportExcel'])->name('demand_export_excel');
    Route::get('demand_by_overseas_agency_id/{id}', [DemandController::class, 'getDemandByOverseasAgencyId'])->name('demand_by_overseas_agency_id');


    Route::resource('contract', ContractController::class);
    Route::get('contract_edit_form_ajax/{id}', [ContractController::class, 'contractEditFormAjax'])->name('contract_edit_form_ajax');
    Route::get('contract_export_excel', [ContractController::class, 'contractExportExcel'])->name('contract_export_excel');

    Route::resource('labour_management', LabourManagementController::class);
    Route::get('labour_create_view/{id}', [LabourManagementController::class, 'createAndView'])->name('labour_create_view');
    Route::get('view_contract_labour/{id}', [LabourManagementController::class, 'viewContractLabour'])->name('view_contract_labour');
    Route::post('sbumit_to_contract', [LabourManagementController::class, 'submitToContract'])->name('sbumit_to_contract');

    Route::resource('sending', SendingController::class);
    Route::get('sending_export_excel', [SendingController::class, 'sendingExportExcel'])->name('sending_export_excel');

    Route::get('sending_create/{id}', [SendingController::class, 'create'])->name('sending_create');
    Route::get('sending_labour/{id}', [LabourManagementController::class, 'sendingLabour'])->name('sending_labour');
    Route::post('remove_from_sending/{id}', [LabourManagementController::class, 'removeFromSending'])->name('remove_from_sending');

    Route::get('passport_export', [PassportController::class, 'passportExport'])->name('passport_export');
    Route::get('contract_labour_passport_export/{id}', [LabourManagementController::class, 'contractLabourPassportExport'])->name('contract_labour_passport_export');
    Route::get('sending_labour_passport_export/{id}', [LabourManagementController::class, 'sendingLabourPassportExport'])->name('sending_labour_passport_export');

    Route::resource('township', TownshipController::class);
    Route::get('get_by_region_id/{id}', [TownshipController::class, 'getByRegionId'])->name('get_by_region_id');
    Route::resource('members_list', MembersListsController::class);

    Route::resource('file_management', FileManagementController::class);
    Route::get('file_upload_view_demand/{id}', [FileManagementController::class, 'fileUploadViewDemand'])->name('file_upload_view_demand');
    Route::get('file_upload_view_contract/{id}', [FileManagementController::class, 'fileUploadViewContract'])->name('file_upload_view_contract');
    Route::get('file_upload_view_sending/{id}', [FileManagementController::class, 'fileUploadViewSending'])->name('file_upload_view_sending');


    Route::resource('labour_docs', LabourDocsController::class);
    Route::get('labour_docs_management/{id}', [LabourDocsController::class, 'labourDocsManagement'])->name('labour_docs_management');


    Route::resource('labour_payment', LabourPaymentController::class);
    Route::get('labour_payment_show/{id}', [LabourPaymentController::class, 'show'])->name('labour_payment_show');

    Route::get('labour_payment_files/{id}', [LabourPaymentController::class, 'labourPaymentFiles'])->name('labour_payment_files');
    Route::post('labour_payment_file_upload', [LabourPaymentController::class, 'labourPaymentFileUpload'])->name('labour_payment_file_upload');
    Route::get('get_labour_payment_datatable', [LabourPaymentController::class, 'labourPaymentDatatable'])->name('get_labour_payment_datatable');


    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('nrc', NrcController::class);
    Route::get('get_nrc_by_code/{id}', [NrcController::class, 'getByNrcCode'])->name('get_nrc_by_code');
    Route::resource('hospital', HospitalController::class);
    Route::get('hospital_export_excel', [HospitalController::class, 'hospitalExportExcel'])->name('hospital_export_excel');

    Route::resource('medical_test', MedicalTestController::class);
    Route::get('medical_failed_labour', [MedicalTestController::class, 'medicalFailedLabour'])->name('medical_failed_labour');
    Route::get('add_medical_test_temp_list', [MedicalTestController::class, 'addMedicalTestTempList'])->name('add_medical_test_temp_list');
    Route::get('get_medical_test_temp_list', [MedicalTestController::class, 'getMedicalTestTempList'])->name('get_medical_test_temp_list');
    Route::get('remove_get_medical_test_temp_list/{id}', [MedicalTestController::class, 'removeMedicalTestTempList'])->name('remove_get_medical_test_temp_list');
    Route::get('update_pass_failed', [MedicalTestController::class, 'updatePassFailed'])->name('update_pass_failed');
    Route::get('get_medical_test_temp_interview', [MedicalTestController::class, 'getMedicalTestTempListInterview'])->name('get_medical_test_temp_interview');

    Route::get('medical_test_export_excel', [MedicalTestController::class, 'medicalTestExportExcel'])->name('medical_test_export_excel');

    Route::resource('passport_datatable', PassportDatatableController::class);
    Route::get('labour_lists', [PassportDatatableController::class, 'labourLists'])->name('labour_lists');
    Route::get('get_passport_datatable', [PassportDatatableController::class, 'index'])->name('get_passport_datatable');
    Route::get('get_medical_tests_pass_labour', [PassportDatatableController::class, 'medicalTestsPassLabour'])->name('get_medical_tests_pass_labour');

    Route::resource('interview', InterviewController::class);
    Route::get('interview_edit_form_ajax/{id}', [InterviewController::class, 'interviewEditFormAjax'])->name('interview_edit_form_ajax');
    Route::get('interview_export_excel', [InterviewController::class, 'interviewExportExcel'])->name('interview_export_excel');

    Route::resource('interview_labour', InterviewLabourController::class);
    Route::get('add_interview_worker/{id}', [InterviewLabourController::class, 'addInterviewWorker'])->name('add_interview_worker');
    Route::post('interview_labour_import', [InterviewLabourController::class, 'interviewLabourImport'])->name('interview_labour_import');


    Route::resource('hospital_file', HospitalFileController::class);
    Route::get('hospital_docs_management/{id}', [HospitalFileController::class, 'hospitalDocsManagement'])->name('hospital_docs_management');

    Route::resource('country_dashboard', CountryDashboardController::class);



    // Accounting
    Route::resource('accounting_dashboard', AccountingDashboardController::class);

    Route::resource('accountclassification', AccountClassificationController::class);
    Route::get('classificationdependent/ajax/{id}', [AccountClassificationController::class, 'dependentAjax']);

    Route::resource('accounttype', AccountTypeController::class);
    Route::get('accounttypedependent/ajax/{id}', [AccountTypeController::class, 'dependentAjax']);

    Route::resource('chartofaccount', ChartofAccountController::class);
    Route::get('chartofaccountdependent/ajax/{id}', [ChartofAccountController::class, 'dependentAjax']);

    Route::resource('cashbook', CashBookController::class);
    Route::get('cashbook_datatable', [CashBookController::class, 'cashbook_datatable'])->name('cashbook_datatable');
    Route::get('cashbook_edit/{id}', [CashBookController::class, 'edit'])->name('cashbook_edit');
    Route::post('cashbook_update', [CashBookController::class, 'update'])->name('cashbook_update');
    Route::post('cashbook_delete', [CashBookController::class, 'destroy'])->name('cashbook_delete');

    Route::resource('demand_invoice', DemandInvoiceController::class);
    Route::get('demand_invoice_datatable', [DemandInvoiceController::class, 'demand_invoice_datatable'])->name('demand_invoice_datatable');

});
