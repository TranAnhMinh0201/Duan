<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Http\Requests\StoreUserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    protected $userRepository;

    public function __construct(
        UserService $userService,
        ProvinceRepository $provinceRepository,
        UserRepository $userRepository,
    ){
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
        $this->userRepository = $userRepository;
    }

    public function index(){

        $users = $this->userService->paginate();

        
        
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ],
        ];
        $config['seo'] = config('apps.user');
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact(
            'template','config','users'));
    }

    public function create(){

        $provinces = $this->provinceRepository->all();
        
        
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js'
            ],
        ];

        $config['seo'] = config('apps.user');
        $config['method'] = 'create';
        $template = 'backend.user.store';
        return view('backend.dashboard.layout', compact(
            'template','config','provinces'));
    }

    public function store(StoreUserRequest $request){
        if($this->userService->create($request)){
            return redirect()->route('user.index')->with('success', 'Thêm mới thành công!');

        }
        return redirect()->route('user.index')->with('error', 'Thêm mới không thành công! Hãy thử lại.');

    }

    public function edit($id){
        $user = $this->userRepository->findById($id);
        $provinces = $this->provinceRepository->all();
        
        
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js'
            ],
        ];

        $config['seo'] = config('apps.user');
        $config['method'] = 'edit';
        $template = 'backend.user.store';
        return view('backend.dashboard.layout', compact(
            'template','config','provinces','user'));
    }

    public function update($id, UpdateUserRequest $request){
        if($this->userService->update($id, $request)){
            return redirect()->route('user.index')->with('success', 'Cập nhật thành công!');

        }
        return redirect()->route('user.index')->with('error', 'Cập nhật không thành công! Hãy thử lại.');

    }

    public function delete($id){
        $config['seo'] = config('apps.user');
        $user = $this->userRepository->findById($id);
        $template = 'backend.user.delete';
        return view('backend.dashboard.layout', compact(
            'template','user','config'));
    }

    public function destroy($id){
        if($this->userService->destroy($id)){
            return redirect()->route('user.index')->with('success', 'Xoá thành công!');
        }
        

    }
    
}
