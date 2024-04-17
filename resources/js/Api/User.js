class User {
    constructor(fields) {
        for (let field in fields) {
            this[field] = fields[field];
        }
    }

    getFullName() {
        return  [this.firstname, this.midname, this.lastname].reverse().join(' ');
    }

    getCompany() {
        return this.company;
    }

    getCompanyFullText() {
        const company = this.getCompany();
        if (!company) return '';

        return [
            company.name, 
            company.inn ? `ИНН ${company.inn}` : '',
            company.ogrn ? `ОГРН ${company.ogrn}` : '',
            company.kpp ? `КПП ${company.kpp}` : '',
        ].filter(v => v.trim() !== '').join(', ');
    }

    getCompanyAddressLine() {
        const company = this.getCompany();
        if (!company) return '';

        return [
            company.address_country,
            company.address_region,
            company.address_city,
            company.address_street,
            company.address_building ? `строение ${company.address_building}` : '',
            company.address_corpus ? `кор. ${company.address_corpus}` : '',
            company.address_office ? `офис ${company.address_office}` : '',
        ].filter(v => v.trim() !== '').join(', ');
    }
}

export default User;