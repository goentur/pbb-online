import Combobox from '@/components/combobox'
import FormInput from '@/components/form-input'
import InputError from '@/components/input-error'
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
    statusPelayanan: { value: string; label: string }[]
    dataLampiran: { value: string; label: string }[]
}
export default function FormDialog({
    open,
    setOpen,
    title,
    data,
    setData,
    errors,
    formRefs,
    processing,
    handleForm,
    statusPelayanan,
    dataLampiran,
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
                                id="keterangan"
                                type="text"
                                value={data.keterangan}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, keterangan: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['keterangan'] = el;
                                    }
                                }}
                                placeholder="Masukkan keterangan"
                                error={errors.keterangan}
                                required
                            />
                            <Combobox label="status" selectedValue={data.status} options={statusPelayanan} onSelect={(value) => setData((prevData:any) => ({ ...prevData, status: value }))} error={errors.status} />
                            <FormInput
                                id="url"
                                type="text"
                                value={data.url}
                                onChange={(e) => setData((prevData: any) => ({ ...prevData, url: e.target.value }))}
                                inputRef={(el) => {
                                    if (formRefs.current) {
                                        formRefs.current['url'] = el;
                                    }
                                }}
                                placeholder="Masukkan url"
                                error={errors.url}
                                required
                            />
                        </div>
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
                                        Dokumen harus ditanda tangan secara elektronik?
                                    </p>
                                    <p className="text-muted-foreground text-sm">
                                        Dicentang apabila pelayanan membutuhkan tandan tangan elektronik
                                    </p>
                                </div>
                            </Label>
                        </div>
                        <div className="grid gap-2">
                            <Label htmlFor="lampiran" className="capitalize mb-2">
                                lampiran
                            </Label>
                            <div className="grid grid-cols-3 gap-4">
                                {dataLampiran?.map((p: any) => (
                                    <div className="grid gap-2" key={p.value}>
                                        <div className="flex items-center space-x-2">
                                            <Checkbox
                                                id={p.value}
                                                value={p.value}
                                                checked={Array.isArray(data.lampiran) && data.lampiran.includes(p.value)}
                                                onCheckedChange={() => setData((prevData: any) => {
                                                    const currentLampiran = Array.isArray(prevData.lampiran) ? prevData.lampiran : [];
                                                    if (currentLampiran.includes(p.value)) {
                                                        return { ...prevData, lampiran: currentLampiran.filter((item:any) => item !== p.value)};
                                                    } else {
                                                        return { ...prevData, lampiran: [...currentLampiran, p.value]};
                                                    }
                                                })}
                                            />
                                            <label
                                                htmlFor={p.value}
                                                className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                            >
                                                {p.label}
                                            </label>
                                        </div>
                                    </div>
                                ))}
                            </div>
                            <InputError message={errors.lampiran} />
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
