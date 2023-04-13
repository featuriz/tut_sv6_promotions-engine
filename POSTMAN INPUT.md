# ROUTES
---
URL: http://127.0.0.1:8000/products/10/lowest-price

|  Headersc       |                    |  
|  ----           |  ----              |
|  Accept         |  application/json  |  
|  Content-Type   |  application/json  |  
|  force_fail     |  500               |  


> body raw 

```json
{
  "quantity": 5,
  "request_location": "UK",
  "voucher_code": "0U812",
  "request_date": "2022-04-04",
  "product_id": 1
}
```
