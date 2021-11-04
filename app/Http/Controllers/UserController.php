use App\User;

public function index(User $user)
{
    return view('User.index')->with(['own_posts' => $user->getOwnPaginateByLimit()]);
}
