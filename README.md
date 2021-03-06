# About

This Laravel trait limits the columns an Eloquent model can return. As opposed to `$visible` and `$hidden` this trait will only select the specified columns.

# Installation

Use composer:
`composer require benjivm/returnable`

# Usage

Add the trait to your model:

```
namespace App\Models;

use Benjivm\Returnable\ReturnableTrait;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use ReturnableTrait;

    protected $returnable = ['Name', 'ConNum', 'Address', 'City', 'State', 'Zip', 'PhoneNum', 'EMailAddress', 'Country', 'Url'];
```

Only the specified columns will be returned when the Model is loaded unless you have manually specified the columns in the instantiation, e.g. `Customer::select('MyColumn as aliased_column')`.
