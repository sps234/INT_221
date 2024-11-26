
use Illuminate\Http\Request;

class UserController extends Controller {
    public function create () {
        return 'this is a page create a post';
    }
    public function show( $id ) {
        return 'View post of id:'.$id;
    }
}