import Combobox from '@/components/combobox'
import FormInput from '@/components/form-input'
import InfoPassword from '@/components/info-password'
import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle
} from '@/components/ui/dialog'
import { Label } from '@/components/ui/label'
import { Loader2, Save } from 'lucide-react'
type props = {
    open: boolean
    setOpen: (open: boolean) => void
    title: string
    data: any
    isEdit: boolean
    setData: (data: any) => void
    errors: any
    formRefs: React.RefObject<Record<string, HTMLInputElement | null>>
    processing: boolean
    handleForm: (e: React.FormEvent) => void
    dataRoles: { value: string; label: string }[]
}
export default function FormDialog({
    open,
    setOpen,
    title,
    data,
    isEdit,
    setData,
    errors,
    formRefs,
    processing,
    handleForm,
    dataRoles
}: props) {
    return (
        <Dialog open={open} onOpenChange={setOpen}>
            <DialogContent className='w-5xl'>
                <form onSubmit={handleForm}>
                    <DialogHeader>
                        <DialogTitle>Form {title}</DialogTitle>
                        <DialogDescription className='italic'>"Silakan isi formulir di bawah ini dengan lengkap dan benar"</DialogDescription>
                    </DialogHeader>
                    <div className="space-y-6 mt-5">
                        <div className="grid grid-cols-2 gap-4">
                            <FormInput
                                id="nip"
                                type="text"
                                value={data.nip}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, nip: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['nip'] = el;
                                    }
                                }}
                                placeholder="Masukkan nip"
                                error={errors.nip}
                                readOnly={isEdit}
                                required
                            />

                            <FormInput
                                id="nama"
                                type="text"
                                value={data.nama}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, nama: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['nama'] = el;
                                    }
                                }}
                                placeholder="Masukkan nama"
                                error={errors.nama}
                                required
                            />

                            <FormInput
                                id="email"
                                type="email"
                                value={data.email}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, email: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['email'] = el;
                                    }
                                }}
                                readOnly={isEdit}
                                placeholder="Masukkan email"
                                error={errors.email}
                                required
                            />

                            <FormInput
                                id="telp"
                                type="text"
                                value={data.telp}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, telp: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['telp'] = el;
                                    }
                                }}
                                readOnly={isEdit}
                                placeholder="Masukkan telp"
                                error={errors.telp}
                                required
                            />

                            {!isEdit && (<>
                                <FormInput
                                    id="password"
                                    type="password"
                                    value={data.password}
                                    onChange={(e) => setData((prevData: any) => ({ ...prevData, password: e.target.value }))}
                                    inputRef={(el) => {
                                        if (formRefs.current) {
                                            formRefs.current['password'] = el;
                                        }
                                    }}
                                    placeholder="Masukkan password"
                                    error={errors.password}
                                    required
                                />

                                <FormInput
                                    id="konfirmasi_password"
                                    type="password"
                                    value={data.password_confirmation}
                                    onChange={(e) => setData((prevData: any) => ({ ...prevData, password_confirmation: e.target.value }))}
                                    inputRef={(el) => {
                                        if (formRefs.current) {
                                            formRefs.current['password_confirmation'] = el;
                                        }
                                    }}
                                    placeholder="Konfirmasi password"
                                    required
                                />
                                <InfoPassword/>
                            </>)}
                        </div>
                        <Combobox label="role" selectedValue={data.role} options={dataRoles} onSelect={(value) => setData((prevData:any) => ({ ...prevData, role: value }))} error={errors.role} />
                        <div className="flex flex-col gap-12">
                            <Label className="hover:bg-accent/50 flex items-start gap-3 rounded-lg border p-3 has-[[aria-checked=true]]:border-blue-600 has-[[aria-checked=true]]:bg-blue-50 dark:has-[[aria-checked=true]]:border-blue-900 dark:has-[[aria-checked=true]]:bg-blue-950">
                                <Checkbox
                                    id="toggle-2"
                                    checked={data.tte === 'y'}
                                    onCheckedChange={(checked) => {
                                        setData({ ...data, tte: checked ? 'y' : 'n' });
                                    }}
                                    className="data-[state=checked]:border-blue-600 data-[state=checked]:bg-blue-600 data-[state=checked]:text-white dark:data-[state=checked]:border-blue-700 dark:data-[state=checked]:bg-blue-700"
                                />
                                <div className="grid gap-1.5 font-normal">
                                    <p className="text-sm leading-none font-medium">
                                        Bisa Tanda Tangan Elektronik?
                                    </p>
                                    <p className="text-muted-foreground text-sm">
                                        Dicentang apabila pegawai bisa melakukan tandan tangan elektronik
                                    </p>
                                </div>
                            </Label>
                        </div>
                    </div>
                    <DialogFooter>
                        <div className="flex items-center mt-5">
                            <Button type="submit" disabled={processing}> {processing ? (<Loader2 className="animate-spin" />) : (<Save /> )} Simpan</Button>
                        </div>
                    </DialogFooter>
                </form>
            </DialogContent>
        </Dialog>
    )
}
