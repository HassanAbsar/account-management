# Account Management System

A complete Laravel-based financial accounting and account management system with comprehensive transaction tracking, multi-account support, and detailed reporting.

---

## Tech Stack

- **Backend:** Laravel 11, PHP 8.2+
- **Frontend:** Bootstrap 5.3, Select2, DataTables, Toastr, Bootstrap Icons
- **Database:** MySQL 8.0+ / MariaDB 10.4+
- **Package Manager:** Composer 2.x, Node.js 18+
- **Reporting:** PDF export, Excel export
- **Theme:** Modern responsive design

---

## Installation

### 1. Clone & Install
```bash
git clone https://github.com/HassanAbsar/account-management.git account-management
cd account-management
composer install
npm install && npm run build
```

### 2. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env`:
```env
APP_NAME="Account Management System"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=account_management
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 3. Database
```bash
php artisan migrate
php artisan db:seed
```

### 4. Storage Link
```bash
php artisan storage:link
```

### 5. Run
```bash
php artisan serve
```

---

## Default Login

| Role | URL | Username | Password |
|------|-----|----------|----------|
| Admin | `/login` | `admin` | `admin123` |

> ⚠️ Change passwords immediately after first login!

---

## Module Overview

| Module | Route | Description |
|--------|-------|-------------|
| Dashboard | `/` | Account overview, balances, recent transactions |
| Accounts | `/accounts` | Account CRUD and management |
| Transactions | `/transactions` | Record debit/credit transactions |
| Account Ledger | `/ledger` | Detailed transaction history per account |
| Bank Reconciliation | `/reconciliation` | Match bank statements with records |
| Reports | `/reports` | Account statements, trial balance |
| Charts of Accounts | `/coa` | Account hierarchy management |
| Users | `/users` | User management and permissions |
| Settings | `/settings` | System configuration |

---

## Features

### Core Accounting
- ✅ Multi-account ledger system
- ✅ Double-entry accounting
- ✅ Transaction recording (debit/credit)
- ✅ Account balance tracking
- ✅ Journal entry management

### Reporting
- 📊 Account statements
- 📊 Trial balance
- 📊 Income statement
- 📊 Balance sheet
- 📊 General ledger reports
- 📊 PDF/Excel export

### Bank Management
- 🏦 Bank account integration
- 🏦 Statement reconciliation
- 🏦 Pending transaction tracking

### User Management
- 👥 Role-based access control
- 👥 User activity logging
- 👥 Permission management

---

## Account Types

- Cash
- Bank
- Accounts Receivable
- Accounts Payable
- Assets
- Liabilities
- Equity
- Income
- Expenses

---

## Transaction Types

- Deposit
- Withdrawal
- Transfer
- Payment
- Refund
- Adjustment

---

## Requirements

- PHP 8.2+
- MySQL 8.0+ or MariaDB 10.4+
- Composer 2.x
- Node.js 18+ (for assets)

---

## File Structure

```
app/
├── Http/Controllers/
│   ├── AccountController.php
│   ├── TransactionController.php
│   ├── ReportController.php
│   └── ReconciliationController.php
├── Models/
│   ├── Account.php
│   ├── Transaction.php
│   ├── User.php
│   └── ...

database/
├── migrations/
└── seeders/

resources/views/
├── layouts/
├── accounts/
├── transactions/
├── reports/
├── reconciliation/
└── ...

routes/
└── web.php
```

---

## Configuration

### Account Settings
Navigate to `/settings/accounts` to:
- Configure account types
- Set default payment methods
- Define account categories

### System Settings
- Date format preferences
- Currency configuration
- Fiscal year settings
- Backup options

---

## Usage Examples

### Record a Transaction
1. Go to `/transactions`
2. Click "New Transaction"
3. Select account, type, and amount
4. Add description and date
5. Click "Save"

### Generate Reports
1. Navigate to `/reports`
2. Select report type
3. Choose date range
4. Download as PDF or Excel

### Bank Reconciliation
1. Go to `/reconciliation`
2. Upload bank statement
3. Match transactions
4. Mark as reconciled

---

## Security Features

- User authentication & authorization
- Password encryption
- Activity logging
- Audit trail
- CSRF protection
- SQL injection prevention

---

## Performance Optimization

- Database indexing on frequently queried fields
- Query caching
- Asset minification
- Lazy loading of related data

---

## Support & Maintenance

For issues, feature requests, or questions:
- Open an issue on GitHub
- Review the documentation
- Check the FAQ section

---

*Account Management System · Built with Laravel*
